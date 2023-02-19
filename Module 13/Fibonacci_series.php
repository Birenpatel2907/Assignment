<?php  

	$n1 = 0;  
	$n2 = 1;  
	echo "<h3>Fibonacci series for first 10 numbers: </h3><br/>";   
	echo $n1.' '.$n2.' ';  
	for($i=0;$i<8;$i++)
	{  
		$n3 = $n1 + $n2;  
		echo $n3.' ';  
		$n1 = $n2;  
		$n2 = $n3;  
	}
?>  