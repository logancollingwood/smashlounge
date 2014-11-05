<?php 

$eventsComing = false;

$query = "SELECT * FROM upcoming";

if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $eventsComing = true;
  $upcomingEvents[] = $row;
}


function makeEventSignup($event) {
	echo "<div class='panel panel-default'>";
    echo "	<div class='panel-heading'><a href='/tournament/" . urlencode($event['title']) . "'>" . $event['title'] . "</a><br><small><a href='https://www.facebook.com/events/" . $event['fb_id'] . "'>Facebook</a></small></div>";
    echo " 	<div class='panel-body form'>";
    echo "  <iframe src='https://docs.google.com/forms/d/1ZEc2zxEEeTwBUNPnvYVVSGLEOp_Nn1LarvaisOPtwWc/viewform?embedded=true' width= '760' height='500' frameborder='0' marginheight='0' marginwidth='0'>Loading...</iframe>";
    echo "  </div>";
    echo "	<div class='panel-footer'>";
    echo "    <div style='width:100%; text-align:left;' >";
    echo "      <iframe src='http://www.eventbrite.com/tickets-external?eid=13973909339&ref=etckt&v=2' frameborder='0' height='256' width='100%' vspace='0' hspace='0' marginheight='5' marginwidth='5' scrolling='auto' allowtransparency='true'></iframe>";
    echo "    </div>";
    echo "  </div>";
    echo "</div>";
}

?>