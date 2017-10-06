<?php

     $date = date ('Y-m-d');
     echo  "The value of \$date: ".$date."<br>";

      $tar = "2017/10/03";
     echo " The value of \$tar: ".$tar."<br>";
  
    $year = array("2012", "396", "300", "2000", "1100", "1089");
    echo "The value of \$year: ";
    print_r($year);
    echo '<br>';
   $date= str_replace("-","/","$date");
   echo " The value of \$date: ".$date."<br>";
    echo '<br>';
    ;
    if ($date>date($tar)) {
    echo "The future"; 
    }elseif ($date<date($tar)) {
    echo "The past";
    }else {
    echo "Oops";
    }
    echo '<br>';   
   echo stripos($date,'/');
   echo '<br>';
    echo explode(" ",$date,1);
    echo explode (" ",$date,2);
    echo explode (" ",$date,3);
    echo explode (" ",$date,4);
    echo '<br>';
   echo str_word_count($date);
   echo'<br>';
   echo strlen($date);
   echo'<br>';
   echo chr($date);
   echo'<br>';
   echo rtrim($date);
   echo '<br>';

    $token = strtok($date," / ");
     while ($token !==false)
     {
      echo "$token<br>";
      $token =strtok(" / ");
      }
     
    $yeartofind = range(2013,2020);

    foreach ($yeartofind as $year) {
      $isleapyear = (bool) date ('L', strtotime("$year-01-01"));
      printf( 
               '%d %s a leap year%s',
               $year,
	       $isleapyear ? 'is' : 'is not', 
	       PHP_EOL 
	      
	       );
	     }

    $day = " ";
    for ($i=0; $i<4; $i++)
    {
        $day = date ("d", mktime(0,0,0,2,29,date("y")+$i));
	if($day == 29)
	{ 
	   $year = date("y")+$i;
	   break;
	   }
	 }
	  echo "<p>The next leap year is 29th february 20$year</p>";
	  echo'<br>';
         
	 if((0==$year%4) and (0 !=$year%100) or (0==$year%400))
	 { 
	   echo"20$year is a leap year";
	   }
	   else 
	   {
	     echo "20$year is not leap year";
	     }

	     switch($year) {
	     case 2016:
	       echo"$year equals  2016";
	       break;
             case 2017: 
	       echo "$year equals 2017";
	       break;
	       }

	  
    
      
?>

