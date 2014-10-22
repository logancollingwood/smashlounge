<?php
	
	$char = isset($_GET['charz'])       ? trim($_GET['charz'])       : "";
  	$tech = isset($_GET["tech"])       ? trim($_GET["tech"])       : "";
  	$amount = isset($_GET['amount'])       ? trim($_GET['amount'])       : "";

  	$char = urldecode($char);
  	$tech = urldecode($tech);
  	$amount = urldecode($amount);
	header('Content-type: application/json');

	$DOWN = array('270', '100');
	$UP = array('90', '100');
	$LEFT = array('180', '100');
	$RIGHT = array('0', '100');
	$SOUTHEAST = array('315', '100');
	$SOUTHWEST = array('225', '100');
	$EMPTY = array();
	
	$json;

	$json['options'] = array('char' => $char, 'tech' => $tech, 'amount' => $amount);


  	if ($tech == 'Wave Dash')  {
  		$json['status'] = 'success';
  		
  		$json['gif'][0] = array(
  			array('frame' => 11, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 12, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 13, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 14, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 15, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 16, 'buttons' => array('l'), 'ctrlStick' => array()),
  			array('frame' => 17, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 18, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 19, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 20, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  			array('frame' => 21, 'buttons' => array(''), 'ctrlStick' => array('315', '100')),
  		);

	  	$json['gif'][1] = array(
	  		//FIRST WAVEDASH
  			array('frame' => 2, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 4, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 5, 'buttons' => array('l'), 'ctrlStick' => $SOUTHWEST),
  			array('frame' => 6, 'buttons' => array(''), 'ctrlStick' => $SOUTHWEST),
  			array('frame' => 7, 'buttons' => array(''), 'ctrlStick' => $SOUTHWEST),
  			array('frame' => 8, 'buttons' => array(''), 'ctrlStick' => $SOUTHWEST),
  			//SECOND WAVEDASH
  			array('frame' => 22, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 23, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 24, 'buttons' => array('l'), 'ctrlStick' => array()),
  			array('frame' => 25, 'buttons' => array(''), 'ctrlStick' => $SOUTHWEST),
  			array('frame' => 25, 'buttons' => array(''), 'ctrlStick' => $SOUTHWEST),
  			array('frame' => 26, 'buttons' => array(''), 'ctrlStick' => array()),
  			//THIRD WAVEDASH
  			array('frame' => 44, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 45, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 46, 'buttons' => array('l'), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 47, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 48, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 49, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),

  			array('frame' => 64, 'buttons' => array(''), 'ctrlStick' => $DOWN),
  			array('frame' => 65, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 66, 'buttons' => array('l'), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 67, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 68, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),
  			array('frame' => 69, 'buttons' => array(''), 'ctrlStick' => $SOUTHEAST),
  		);
  		
	  
	  
	  echo json_encode($json);
	  return true;

	} else if ($tech == 'Jump Canceled Grab') {

		$json['status'] = 'success';
  		
  		$json['gif'][0] = array(
  			array('frame' => 33, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 34, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 35, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 36, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 37, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 38, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 39, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 40, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 41, 'buttons' => array('z'), 'ctrlStick' => array()),

  		);

	  	$json['gif'][1] = array(
	  		array('frame' => 30, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 31, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 32, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 33, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 34, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 35, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 36, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 37, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 38, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 39, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
  			array('frame' => 40, 'buttons' => array('y'), 'ctrlStick' => array()),
  			array('frame' => 41, 'buttons' => array('z'), 'ctrlStick' => array()),
  		);

	    echo json_encode($json);
	  	return true;
	}
	$json['status'] = 'failure';
	echo json_encode($json);


?>