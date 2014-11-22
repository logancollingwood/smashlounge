<?php
	
	$hasTwitch = false;
	$hasTournament = false;
	$eventInfoz = array();
	if ($hasGet) {
		
		$query = "SELECT * FROM " . $upcomingTable . " WHERE title='" . $tournament . "'";


		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
			$hasTournament = true;
			$eventInfoz = $row;
		}
		if ($eventInfoz) {
			$first = $eventInfoz['first'];
			$second = $eventInfoz['second'];
			$third = $eventInfoz['third'];
			$attending = $eventInfoz['attending'];
			$host = $eventInfoz['host'];
			$vods = $eventInfoz['vods'];
			$bracket = $eventInfoz['bracket'];
			$startDate = $eventInfoz['start'];
			$endDate = $eventInfoz['end'];
			if ($eventInfoz['stream'] != '') {
				$hasTwitch = true;
				$twitch = $eventInfoz['stream'];
			}
		}
	}


    
    function makeInfo($host, $entrants) {
	  	echo "<div class='well'>";
	  		echo "        <h3><small class='pull-left labelz'>presented by</small>";
	        echo "        $host</h3>";
	        echo "		  <hr>";
	        echo "        <h3><small class='pull-left labelz'>entrants</small>";
	        echo "        $entrants</h3>";
	    echo "</div>";
	}



    function makeStandings($first, $second, $third){
    	echo "<div class='well'>";
    		echo "<div class='row'>";
		    	if ($first != '') {
			        echo "        <h2><small class='pull-left labelz'>first</small>";
			        echo 			$first . "</h2>";
			        echo "<hr>";
				}
				if ($second != '') {
			        echo "        <h3><small class='pull-left labelz'>second</small>";
			        echo 			$second . "</h3>";
			        echo "<hr>";
				}
				if ($third != '') {
			        echo "        <h3><small class='pull-left labelz'>third</small>";
			        echo 			$third . "</h3>";
			        echo "<hr>";
				}
			echo "</div>";
    	echo "</div>";
    }

    
    function makeBracket($link){
    	//echo $link;
    	echo "<div class='well'>";
        echo "  <div class='challonge_bracket_real' style='width:100%;height:500px;'>";
        echo "		<iframe src='" . $link . "/module?multiplier=0.9theme=2651&show_final_results=1' width='100%'' height='500' frameborder='0' scrolling='auto' allowtransparency='true'></iframe>";
        echo"   </div>";
        echo "</div>";
    }

    function makeVods($vods) {
    	if ($vods != '') {
	    	echo "<div class='well'>";
		  		echo "        <h3><small class='pull-left labelz'>vods</small>";
		        echo "        <a href='https://vods.co/melee?event=" . $vods . "'>link</a></h3>";
		    echo "</div>";
		}
    }

    function makeDiscussion() {
    	echo "<div id='disqus_thread'></div>";
	    echo "<script type='text/javascript'>";
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    echo "    var disqus_shortname = 'thesmashlounge'; ";

	        /* * * DON'T EDIT BELOW THIS LINE * * */
	    echo "    (function() {
	            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	        })();
	    </script>";
	    echo "<noscript>Please enable JavaScript to view the <a href='http://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>";
	    echo "<a href='http://disqus.com' class='dsq-brlink'>comments powered by <span class='logo-disqus'>Disqus</span></a>";
    
    }

?>