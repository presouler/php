<?php

	function binarySearch(&$arr,$findVal,$leftIndex,$rightIndex){
		if($leftIndex>$rightIndex){
			echo "no such value";
			return;
		}
		$middleIndex= round(($leftIndex+$rightIndex)/2);
		
		if($findVal>$arr[$middleIndex]){
			binarySearch($arr,$findVal,$middleIndex+1,$rightIndex);
		}
		else if($findVal<$arr[$middleIndex]){
			binarySearch($arr,$findValu,$leftIndex,$middleIndex-1);
		}else{
			echo "$middleIndex";
		}
		
		
		
	}
		$arr=array(1,3,4,5,6,10,14);
		binarySearch($arr,10,0,count($arr)-1);

?>