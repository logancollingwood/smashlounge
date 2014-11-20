<?php
	
	require("../techs/db.php");

	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$db    = new PDO('mysql:host=' . $dahostname . ';dbname=' . $database .';charset=utf8', $username, $password);



$start = $_REQUEST['from'] / 1000;
$end   = $_REQUEST['to'] / 1000;
$sql   = sprintf('SELECT * FROM ' . $upcoming);

$out = array();
foreach($db->query($sql) as $row) {
    $out[] = array(
        'id' => $row['id'],
        'title' => $row['title'],
        'url' => "http://www.smashlounge.com/upcoming?tournament=" . urlencode($row['title']),
        'class' => $row['class'],
        'start' => strtotime($row['start'])*1000,
        'end' => strtotime($row['end'])*1000
    );
}

echo json_encode(array('success' => 1, 'result' => $out), JSON_PRETTY_PRINT);

exit;

?>