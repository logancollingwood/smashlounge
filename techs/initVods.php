<?php

	require_once("techs/db.php");

	//initializes an array with 1 vod per 6 categories for display on the home page
	foreach ($vodcategories as $key => $name) {
		$tempArr = array();
		$query = "
		SELECT * FROM vods WHERE typeid=$key
		ORDER BY RAND()
		LIMIT 1";

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
			$tempArr[] = $row;
		}
		$allVods[$name] = $tempArr;
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

		$firsthalf = array_slice($vods, 0, $numVods / 2);
		$secondhalf = array_slice($vods, $numVods / 2);

		$numColums = 2;

		$ColumSize = 12/$numColums;

		echo "<div class='row'>";
			echo "<div class='col-md-$ColumSize'>";
			foreach ($firsthalf as $vod) {
				displayVod($vod);
			}

			echo "</div>";
			echo "<div class='col-md-$ColumSize'>";
			foreach ($secondhalf as $vod) {
				displayVod($vod);
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