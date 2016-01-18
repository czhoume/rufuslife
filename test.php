<?php 

$time= new DateTime();
$timenow=$time;
echo $timenow->format('Y-m-d H:i:s') . "<br>";
$time= new DateTime("2016-1-17 11:23:00");
echo $time->format('Y-m-d H:i:s') . "<br>";
$diff=round ((($timenow - $time))/60);
echo "look at this ". $diff;
?>