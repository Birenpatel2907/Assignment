<?php
   function year_check($my_year)
   {
      if ($my_year % 400 == 0)
	  {		
         echo $my_year." is a leap year.</br>";
      }
	  else if ($my_year % 100 == 0)
	  {	
		 echo $my_year." is not a leap year.</br>";
	  }	
      else if ($my_year % 4 == 0)
	  {
      	   echo $my_year." is a leap year.</br>";
      }
	  else
      {
		  echo $my_year." is not a leap year.</br>";
	  }
   }
   year_check(1904);
   year_check(1994);
   year_check(2001);
   year_check(2005);
   year_check(2016);
 ?>