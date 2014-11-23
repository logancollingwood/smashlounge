<?php
	
	require("../techs/db.php");

	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$db    = new PDO('mysql:host=' . $dahostname . ';dbname=' . $database .';charset=utf8', $username, $password);


    function isToday($time) {
        return (strtotime($time) === strtotime('today'));
    }


$start = $_REQUEST['from'] / 1000;
$today = strtotime('today');
$end   = $_REQUEST['to'] / 1000;
$sql   = sprintf('SELECT * FROM ' . $upcoming);

$out = array();
foreach($db->query($sql) as $row) {
    $endDate = strtotime($row['end']);

    if ($endDate > $today) {
        $class = 'event-info';
    } else {
        $class = 'event-success';
    }

    $out[] = array(
        'id' => $row['id'],
        'title' => $row['title'],
        'url' => "/tournament/" . urlencode($row['title']),
        'class' => $class,
        'start' => strtotime($row['start'] . ' + 1 day')*1000,
        'end' => strtotime($row['end'] . ' + 1 day')*1000
    );
}

echo json_encode(array('success' => 1, 'result' => $out), JSON_PRETTY_PRINT);

exit;

?>