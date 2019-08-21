<?php
	function selectSort(&$arr){
		for($i=0;$i<count($arr)-1;$i++){
			$minVal=$arr[$i];
			$minIndex=$i;
			for($j=$i+1;$j<count($arr);$j++){
				
				if($minVal>$arr[$j]){
					$minVal=$arr[$j];
					$minIndex=$j;
				}
			}
			
			$temp=$arr[$i];
			$arr[$i]=$arr[$minIndex];
			$arr[$minIndex]=$temp;
		}
		
		
	}



?>