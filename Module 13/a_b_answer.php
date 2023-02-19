<?php

$a = '1';
$b = &$a;
$b = "2$b";

echo "A value is: $a <br/>";
echo "B value is: $b <br/>";
	

?>