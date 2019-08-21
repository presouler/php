<?php
	function bubblesort(&$arr){
	$temp=0;
	for($i=0;$i<count($arr)-1;$i++){
		for($j=0;$j<count($arr)-1-$i;$j++){
			if ($arr[$j]>$arr[$j+1]){
				$temp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$temp;
			}
		
		}
	}
	}
	$myarr=array(6,4,7);
	bubblesort($myarr);
	print_r($myarr);

?>