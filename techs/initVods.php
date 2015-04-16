<?php

	require_once("techs/db.php");

	$query = "SELECT * from vods";
	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	}
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
		
		shuffle($TechniqueVods);
		shuffle($MatchVods);
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

?>