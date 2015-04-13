<?php

	require_once("techs/db.php");

	$query = "SELECT * from vods";
	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	}

	$TechniqueVods 		= array();
	$MatchVods			= array();
	$EntertainmentVods 	= array();
	$PPUVods 			= array();
	$ComboVods			= array();
	$TeamVods			= array();

	foreach ($result as $row) {
		switch ($row['typeid']) {
			case '1':
				$TechniqueVods[] = $row;
				break;
			case '2':
				$MatchVods[] = $row;
				break;
			case '3':
				$EntertainmentVods[] = $row;
				break;
			case '4':
				$PPUVods[] = $row;
				break;
			case '5':
				$ComboVods[] = $row;
				break;
			case '6':
				$TeamVods[] = $row;
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
		if ($PPUVods != null)
			shuffle($PPUVods);
		if ($ComboVods != null)
			shuffle($ComboVods);
		if ($TeamVods != null)
			shuffle($TeamVods);

		$allVods['Techniques'] = $TechniqueVods;
		$allVods['Matches'] = $MatchVods;
		$allVods['Entertainment'] = $EntertainmentVods;
		$allVods['PPU'] = $PPUVods;
		$allVods['ComboVods'] = $ComboVods;
		$allVods['TeamVods'] = $TeamVods;


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
			for ($j = 0; $j <= floor($numVods/2); $j++) {
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
		global $vodcategories;

		foreach ($vodcategories as $num => $name) {
			if ($name == $vodType) return $num;
		}
		return -1;
	}
?>