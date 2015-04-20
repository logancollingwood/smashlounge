<?php

function twitterTimeline() {
  echo '
  <a class="twitter-timeline" href="https://twitter.com/thesmashlounge" data-chrome="noheader nofooter noscrollbar transparent" data-widget-id="585544387632967681">Tweets by @thesmashlounge</a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
}

function printRandomVod() {
  global $mysqli;

  $query = 'SELECT * FROM vods ORDER BY RAND() LIMIT 1';

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $vod = $row;
  }
  echo "                <div class='panel-heading'> <a href=//www.youtube.com/watch?v=" . $vod['url'] . ">" . $vod['title'] . "</a></div>";
  echo '                <div class="panel-body">
                          <div class="videoContainer">
                              <iframe type="text/html" width="300" height="200"
                                src="http://www.youtube.com/embed/' . $vod['url'] . '?origin=http://example.com"
                                frameborder="0"/></iframe>
                          </div>
                        </div>
                        <div class="panel-footer" style="text-align:right;"><a href="https://www.youtube.com/watch?v='. $vod['url'] . '">' . $vod['description'] . '</a></div>';
}


function makeStreamPanel($activeStreams) {
	echo "<div class='panel panel-default streampanel'>
          <div class='panel-heading'> Live SSB Streams </div>
            <div class='panel-body streams'>";
              $counter = 0;
              $maxCount = 3;
              foreach ($activeStreams as $data) {

                if ($counter >= $maxCount) break;
                    makeStreamUnit($data);
                if ($counter != $maxCount - 1) echo "<hr>"; else echo "<br>";
                $counter++;
              }
  echo "    </div>
        </div>";
}


function makeStreamUnit($stream) {

  $streamer = $stream['channel']['display_name'];
  $gameTitle = $stream['channel']['game'];
  echo "<div class='streamUnit'>";
  echo "<div class='streamTitle'>";
  echo "  <a href='" . $stream['channel']['url'] . "' class='theme'>";
  echo      $stream['channel']['status'] . "</a>";
  echo "</div>";
  echo "<div class='row'>";
  echo "    <div class='col-sm-6'>";
  echo "      <div class='streamer'>";
  echo "        <div class='streamImg'>";
  echo "          <img src='" . $stream['channel']['logo'] ."'/>";
  echo "        </div>";
  echo "        <a href=//www.twitch.tv/$streamer><span class='streamerText'>$streamer</span>";
  echo "        </a>";
  echo "       </div>";
  echo "    </div>";
  echo "    <div class='col-sm-6'>";
  echo "      <div class='streamDetails'>";
    echo "      <div class='viewers'>viewers:" . $stream['viewers'] . "</div>";
    echo "      <div class='streamGame'>";
                  if (strcmp($gameTitle, "Super Smash Bros. Melee") == 0) {
                    echo "melee";
                  } else if (strcmp($gameTitle, "Super Smash Bros. for Wii U") == 0) {
                    echo "sm4sh";
                  } else if (strcmp($gameTitle, "Project M") == 0) {
                    echo "pm";
                  } else if (strcmp($gameTitle, "Smash Bros 64") == 0) {
                    echo "64";
                  } else if (strcmp($gameTitle, "Super Smash Bros. Brawl") == 0) {
                    echo "brawl";
                  } else {
                    echo "sm4sh";
                  } 
    echo '    </div>';
    echo '  </div>';                     
  echo "   </div>";
  echo "</div>";
  echo "</div>";
}
?>