<?php
 
$ph="80";
$ch="77";
$mt="95";
$bi="75";
$com="82";

echo"Physics is: $ph </br>";
echo"Chemistry is: $ch </br>";
echo"mathematics is: $mt </br>";
echo"Biology is: $bi </br>";
echo"Computer is: $com </br>";
echo"</br></br>";

$per=($ph+$ch+$mt+$bi+$com)/5;
echo"Percentage obtained by student is:  $per% </br>";

 if($per>=90)
  {
   echo "Grade : A";
  }
  else if($per>=80)
  {
   echo "Grade : B";
  }
  else if($per>=70)
  {
   echo "Grade : C";
  }
  else if($per>=60)
  {
   echo "Grade : D";
  }
  else if($per>=40)
  {
   echo "Grade : E";
  }
  else
  {
   echo "Fail!!!";
  }
?>