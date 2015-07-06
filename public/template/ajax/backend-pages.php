<?php
	header('Content-Type: application/json');
	
	$return = array(
		'count' => 3,
		'html' => '
			<ul>
				<li><a href="#"><span class="icon icon_blank">&nbsp;</span>Sub 1</a></li>
				<li><a href="#"><span class="icon icon_blank">&nbsp;</span>Sub 2</a></li>
				<li><a href="#"><span class="icon icon_blank">&nbsp;</span>Sub 3</a></li>
			</ul>
		'
	);
	
	$return = json_encode($return);
	echo $return;
?>