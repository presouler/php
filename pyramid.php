<?php

	$num=21;
	for($i=1;$i<=$num-1;$i++){
		for($j=1;$j<=(($num*2-1)-(2*$i-1))/2;$j++){
			echo "&nbsp;&nbsp;";
		}
		for($k=1;$k<=2*$i-1;$k++){
			echo "*";
		}
		echo "<br/>";
		
	}
	for($i=1;$i<=$num-1;$i++){
		for($j=1;$j<=(($num*2-1)-(2*$i-1))/2;$j++){
			echo "&nbsp;&nbsp;";
		}
		echo"*";
		for($k=1;$k<=2*($i-1)-1;$k++){
			echo "&nbsp;&nbsp;";
		}
		if($i!=1){echo"*";};
		echo "<br/>";
		
	}

?>