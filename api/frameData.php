<?php
	
	$char = isset($_GET['charz'])       ? trim($_GET['charz'])       : "";
  	$tech = isset($_GET["tech"])       ? trim($_GET["tech"])       : "";
  	$amount = isset($_GET['amount'])       ? trim($_GET['amount'])       : "";

  	$char = urldecode($char);
  	$tech = urldecode($tech);
  	$amount = urldecode($amount);
	header('Content-type: application/json');
	
	$json;

	$json['options'] = array('char' => $char, 'tech' => $tech, 'amount' => $amount);
  	if ($tech == 'Wave Dash')  {
  		$json['status'] = 'success';
  		
  		$json['gif'][0] = array(
  			array('frame' => 12, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 13, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 14, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 15, 'buttons' => array(''), 'ctrlStick' => array('90', '100')),
  			array('frame' => 16, 'buttons' => array('l'), 'ctrlStick' => array()),
  			array('frame' => 17, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 18, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 19, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 20, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 21, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  		);
	  	$json['gif'][1] = array(
  			array('frame' => 12, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 13, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 14, 'buttons' => array(''), 'ctrlStick' => array('270', '100')),
  			array('frame' => 15, 'buttons' => array(''), 'ctrlStick' => array('90', '100')),
  			array('frame' => 16, 'buttons' => array('l'), 'ctrlStick' => array()),
  			array('frame' => 17, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 18, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 19, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 20, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 21, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  		);
  		
	  
	  
	  echo json_encode($json);

	  //sendResponse(200, json_encode($json));
	  return true;
	}
	$json['status'] = 'failure';
	echo json_encode($json);


?>