<?php
	require_once 'Pig.class.php';
	
	$pig1=new pig;
	$pig1->weight=100;
	
	$pig1->addWeight(2);
	echo"$pig1->weight";
?>