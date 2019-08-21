<?php
	try{
		$i=7/0;
	}catch(Exception $e){
		echo "ok";
		echo $e->getMessage();
	}



?>