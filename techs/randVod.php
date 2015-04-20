<?php

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
                        <div class="panel-footer" style="text-align:right;">' . $vod['description'] . '</div>';
}
?>