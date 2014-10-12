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
  			array('frame' => 2, 'buttons' => array('b'), 'ctrlstick' => array('270', '100')),
  			array('frame' => 3, 'buttons' => array('y'), 'ctrlstick' => array()),
  			array('frame' => 4, 'buttons' => array('b'), 'ctrlstick' => array('270', '100')),
  		);
	  	
  		
	  
	  
	  echo json_encode($json);

	  //sendResponse(200, json_encode($json));
	  return true;
	}
	$json['status'] = 'failure';
	echo json_encode($json);


?>