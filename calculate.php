<?php
$num1 = $_REQUEST['1num'];
$num2 = $_REQUEST['2num'];
$operator=$_REQUEST['operator'];
$res=0;
switch($operator){
	case "+":
		$res=$num1+$num2;
		break;
	case "-":
		$res=$num1-$num2;
		break;
	case "*":
		$res=$num1*$num2;
		break;
	case "/":
		$res=$num1/$num2;
		break;
	default:
		echo 'something wrong';
}
echo $res;

?>
</br>
<a href="calculator.html">back</a>