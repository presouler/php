<?php
	function insertSort(&$arr){
		
		for($i=1;$i<count($arr);$i++){
			
			$insertVal=$arr[$i];
			$insertIndex=$i-1;
			
			while($insertIndex>=0&&$insertVal<$arr[$insertIndex]){
				$arr[$insertIndex+1]=$arr[$insertIndex];
				$insertIndex--;
				
			}
			$arr[$insertIndex+1]=$insertVal;
		}
	}

	$arr=array(4,2,-1);
	insertSort($arr);
	print_r($arr);

?>