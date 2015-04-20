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




	function displayVod($vod, $counter = 0) {
		$vodId = $vod['id'];

		global $loggedIn, $user;

		echo '
				<div class="gfyTainer">';
		echo '		<div class="row">';
		echo '			<div class="col-md-2 col-sm-2 voteBlock">';
		if ($counter != 0) {
	  	echo "       		<span class='exNum'>";
	  	echo          			'#';
	  	echo          			$counter;
	  	echo "       		</span>";
  	  	echo '        		<hr>';

  		echo '       		<br>';
	  	}
			//this gathers vote details for a particular user, in case we need to 
			// display a previous vote or whatever
			$voteDetails = vodvoteDetails($vod['id'], $user['id']);

			$score = getVodScore($vodId);

		  	if ($voteDetails['direction'] > 0) {
		    	echo "       <a id='up$vodId'href='#' class='vote SL' data-id='" . $vodId . "' data-type='chargif' data-direction='up' disabled='disabled'><span class='glyphicon glyphicon-chevron-up btn-lg'></span></a>";
		  	} else {
		    	echo "       <a id='up$vodId'href='#' class='vote' data-id='" . $vodId . "' data-type='chargif' data-direction='up'><span class='glyphicon glyphicon-chevron-up btn-lg'></span></a>";
		  	}
		  
		  	echo "       <h4 id='score$vodId'>" . $score['total'] . "</h4><i id='spin$vodId'class='fa fa-circle-o-notch fa-spin hidden margin-left'></i>";
		  
		  	if ($voteDetails['direction'] < 0) {
		    	echo "       <a id='down$vodId'href='#' class='vote SL' data-id='" . $vodId . "' data-type='chargif' data-direction='down' disabled='disabled'><span class='glyphicon glyphicon-chevron-down btn-lg'></span></a>";        
		  	} else {
		    	echo "       <a id='down$vodId'href='#' class='vote' data-id='" . $vodId . "' data-type='chargif' data-direction='down'><span class='glyphicon glyphicon-chevron-down btn-lg'></span></a>";  
		  	}

		echo '			</div>';

		echo '			<div class="col-md-10">';
		echo '        		<div class="videoContainer">';
		echo '		          	<iframe type="text/html" width="300" height="200"
				          			src="http://www.youtube.com/embed/' . $vod['url'] . '?fs=1&modestbranding=1"
				          			frameborder="0"/></iframe>
			        		</div>';
    	echo '				<h2> ' . $vod['title'] . '</h2>';
    	echo '				<div class="gfyFooter">';
    	echo '					<div class="gfyDescription"> ' . $vod['description'] . '</div>';
    	echo '					<div class="gfySource"> from ' . $vod['credit'] . '</div>';
    	echo '				</div>';
    	echo '			</div>';
    	echo ' 		</div>';
	    echo '	</div>';
	}



	function vodvoteDetails($vodId, $userID) {
	  global $mysqli;
	  $query = "SELECT * from vodvotes where vodid=$vodId and voterid=$userID";
	  
	  if (!$result = $mysqli->query($query)) {
	    die('Invalid query: ' . $mysqli->error);
	  }

	  if(mysqli_num_rows($result) > 0) {
	      foreach($result as $record) {
	        return $record;
	      }
	  }

	  return NULL;

	}

	function getVodScore($vodId) {
	  global $mysqli;

	  $query = "
	      SELECT vodid, SUM(direction) as total, SUM(CASE WHEN direction<0 THEN direction ELSE 0 END) as up,
	           SUM(CASE WHEN direction>=0 THEN direction ELSE 0 END) as down
	    FROM vodvotes
	    where vodid = $vodId";
	  
	  if (!$result = $mysqli->query($query)) {
	    die('Invalid query: ' . $mysqli->error);
	  }
	  foreach ($result as $row) {
	    $score = $row;
	  }

	  //force undefined values to 0
	  //this also catches when a gif has not been voted on before
	  //shouldn't effect anything, only graphical display of current totals
	  if ($score["vodid"] == NULL) $score["vodid"] = -1;
	  if ($score["up"] == NULL) $score["up"] = 0;
	  if ($score["total"] == NULL) $score["total"] = 0;
	  if ($score["down"] == NULL) $score["down"] = 0;

	  return $score;
	}

	function gatherVods($vodType) {
		$vods = selectVodsByCategory($vodType);

		$numVods = count($vods);


		echo "<div class='row'>";
			echo "<div class='col-md-8'>";
			$counter = 1;
			foreach ($vods as $vod) {
				displayVod($vod, $counter);
				$counter++;
			}
			printSubmit('vod');
			echo "</div>";
			echo "<div class='col-md-4'>";
				printDisqus();
			echo "</div>";
		echo "</div>";
	}

	function selectVodsByCategory($vodType) {
		//Selects vods by a given string category
		//and returns an array of db results sorted by
		//vote count
		global $mysqli;

		$vodTypeId = -1;

		$vodTypeId = getVodTypeId($vodType);

		$vods = array();

	 	$query = "SELECT * FROM vods where typeid=$vodTypeId";

	  	if (!$result = $mysqli->query($query)) {
	    	die('Invalid query: ' . $mysqli->error);
	  	}
	  	foreach ($result as $row) {

		    $score = getScoreByID($row['id']);

		    $row['score'] = $score;

	    	$vods[] = $row;
	  	}


	  	usort($vods,'scoreDescSort');



		return $vods;
	}
	function scoreDescSort($item1,$item2) {
       if ($item1['score'] == $item2['score']) return 0;
       return ($item1['score'] < $item2['score']) ? 1 : -1;
    }

	function getScoreByID($id) {
	    global $mysqli;

	    $query = "
	        SELECT vodid, SUM(direction) as total
	      FROM vodvotes
	      where vodid = $id";
	    
	    if (!$result = $mysqli->query($query)) {
	      die('Invalid query: ' . $mysqli->error);
	    }
	    foreach ($result as $row) {
	      $score = $row['total'];
	    }

	    //force undefined values to 0
	    //this also catches when a gif has not been voted on before
	    //shouldn't effect anything, only graphical display of current totals

	    if ($score == NULL) $score = 0;

	    return $score;
    }

	function getVodTypeId($vodType) {
		global $vodcategories;

		foreach ($vodcategories as $num => $name) {
			if ($name == $vodType) return $num;
		}
		return -1;
	}
?>