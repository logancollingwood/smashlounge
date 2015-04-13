<?php

	require_once("techs/db.php");

	$query = "SELECT * from vods";
	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	}

	$TechniqueVods 		= array();
	$MatchVods			= array();
	$EntertainmentVods 	= array();


	foreach ($result as $row) {
		switch ($row['typeid']) {
			case '1':

				$TechniqueVods[] = $row;
				$row['typeid'] = 'Technique';
				break;
			case '2':

				$MatchVods[] = $row;
				$row['typeid'] = 'Match';
				break;
			case '3':

				$EntertainmentVods[] = $row;
				$row['typeid'] = 'Entertainment';
				break;

			default: 
				$row['typeid'] = 'General';
				break;
		}
		if ($TechniqueVods != null)
			shuffle($TechniqueVods);
		if ($MatchVods != null)
			shuffle($MatchVods);
		if ($EntertainmentVods != null)
			shuffle($EntertainmentVods);

		$allVods['Techniques'] = $TechniqueVods;
		$allVods['Matches'] = $MatchVods;
		$allVods['Entertainment'] = $EntertainmentVods;


		$allVods[] = $row;
	}





	function displayVod($vod) {
		echo '
				<div class="well vod">
		        	<div class="videoContainer">
			          	<iframe type="text/html" width="300" height="200"
			          		src="http://www.youtube.com/embed/' . $vod['url'] . '?origin=http://example.com"
			          		frameborder="0"/></iframe>
		        	</div>';
    	echo '		<p class="vodTitle"> ' . $vod['title'] . '</p>';
    	echo '		<p class="vodDescription"> ' . $vod['description'] . '</p>';
    	echo '		<p class="vodCredits"> -' . $vod['credit'] . '</p>';
	    echo '	</div>';
	}

	function gatherVods($vodType) {
		$vods = selectVodsByCategory($vodType);

		$numVods = count($vods);

		$numColums = 2;

		$ColumSize = 12/$numColums;

		echo "<div class='row'>";
			echo "<div class='col-md-$ColumSize'>";
			for ($j = 0; $j < floor($numVods/2); $j++) {
				displayVod($vods[$j]);
			}
			echo "</div>";
			echo "<div class='col-md-$ColumSize'>";
			for ($j = ceil($numVods/2); $j < $numVods; $j++) {
				displayVod($vods[$j]);
			}
			echo "</div>";
		echo "</div>";
	}

	function selectVodsByCategory($vodType) {
		global $mysqli;

		$vodTypeId = -1;

		$vodTypeId = getVodTypeId($vodType);

		$vods = array();

		$query = "SELECT * from vods where typeid=$vodTypeId";
		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
			$vods[] = $row;
		}

		return $vods;
	}

	function getVodTypeId($vodType) {
		$id = -1;
		switch ($vodType) {
			case 'Techniques':
				$id = 1;
				break;
			case 'Matches':
				$id = 2;
				break;
			case 'Entertainment': 
				$id = 3;
				break;
			case 'PewPewUniversity':
				$id = 4;
				break;
			case 'Teams': 
				$id = 5;
				break;
			default:
				$id = -1;
				break;
		}
		return $id;
	}
?>