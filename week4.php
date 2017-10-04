<?php
  $obj = new main();


  class main   {

     public function __construct() {
     $date = date ('Y-m-d');
     $display =  "The value of \$date: ".$date."<br>";
     dateDisplay::printDate($display);
   

     $tar = "2017/10/03";
     echo " The value of \$tar: ".$tar."<br>";
  
    $year = array("2012", "396", "300", "2000", "1100", "1089");
    echo "The value of \$year: ";
    print_r($year);
    echo '<br>';
     

   }


   public function __destruct(){
   echo '</br> done';
 }   
 }

   
 class dateDisplay {
   static public function printdate($t){
     echo $t;}
     }

?>

