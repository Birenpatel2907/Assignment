<?php

$a = 70;
$b = 65;
$c = 62;

	if ($a >= $b && $a >= $c)
	{
		$max = $a;
	}
	elseif ($b >= $a && $b >= $c)
	{
		$max = $b;
	}
	else 
	{
		$max = $c;
	}
	
	 echo "Largest number among $a, $b and $c is: $max";
?>  