<?php

	$arr = array(10, 20, 30, 25, 15);   
	$sum = 0;  
   
	for ($i = 0; $i < count($arr); $i++) 
	{   
	   $sum = $sum + $arr[$i];  
	}    
	echo "Sum of Five the elements is: $sum";