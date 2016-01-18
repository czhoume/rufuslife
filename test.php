<?php 

$time= new DateTime();
$timenow=$time;
echo $timenow->format('Y-m-d H:i:s') . "<br>";
$time->sub(new DateInterval('PT10M'));
echo $time; 
$diff=$timenow-$time;
echo "look at this ". $diff;
?>