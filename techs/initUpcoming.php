<?php
	
	$hasTwitch = false;
	if ($hasTournament) {
		
		$query = "SELECT * FROM " . $upcomingTable . " WHERE title='" . $tournament . "'";


		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
			$eventInfoz = $row;
		}
		if ($eventInfoz['stream'] != '') {
			$hasTwitch = true;
			$twitch = $eventInfoz['stream'];
		}
		$first = $eventInfoz['first'];
		$second = $eventInfoz['second'];
		$third = $eventInfoz['third'];
		$attending = $eventInfoz['attending'];
	}


	function makeInfo(){

	}
    
    function makeStandings($first, $second, $third){
    	echo "<div class='well'>";
	    	if ($first != '') {
		        echo "        <h2><small>first</small>";
		        echo 			$first . "</h3>";
			}
			if ($second != '') {
		        echo "        <h3><small>second</small>";
		        echo 			$second . "</h3>";
			}
			if ($third != '') {
		        echo "        <h3><small>third</small>";
		        echo 			$third . "</h3>";
			}
    	echo "</div>";
    }

    
    function makeBracket($link){
    	//echo $link;
    	echo "<div class='well'>";
        echo "  <div class='challonge_bracket_real' style='width:100%;height:500px;'>";
        echo "		<iframe src='" . $link . "/module?theme=2651&show_final_results=1' width='100%'' height='500' frameborder='0' scrolling='auto' allowtransparency='true'></iframe>";
        echo"   </div>";
        echo "</div>";
    }

?>