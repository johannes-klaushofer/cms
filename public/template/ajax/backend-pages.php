<?php
	header('Content-Type: application/json');
	
	$return = array(
		'pages' => array(
			array(
				'id' => 1,
				'name' => 'Testseite'
			),
			array(
				'id' => 2,
				'name' => 'Testseite 2'
			),
			array(
				'id' => 3,
				'name' => 'Lorem ipsum dolor'
			)
		)
	);
	
	$return = json_encode($return);
	echo $return;
?>