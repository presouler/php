<?php

	function my_erro($errno,$errmes){
		$err_info="erro num:".$errno."--".$errmes;
		echo $err_info;
		error_log(date("Y-m-d G-i-s")."--".$err_info."\r\n",3,"myerr.txt");
	}
	set_error_handler("my_erro",E_USER_WARNING);
	
	$age=150;
	if($age>120){
		trigger_error("age grater than 120",E_USER_WARNING);
		exit();
	}
	
?> 