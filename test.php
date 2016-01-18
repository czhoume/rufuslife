<?php 

$time= new DateTime();
$timenow=$time;
echo $timenow->format('Y-m-d H:i:s') . "<br>";
$time= new DateTime("2016-1-17 11:23:00");
echo $time->format('Y-m-d H:i:s') . "<br>";
$diff=round ((($timenow - $time))/60);
echo "look at this ". $diff;

$to_time = strtotime("2008-12-13 10:42:00");
$from_time = strtotime("2008-12-13 10:21:00");
echo round(abs($to_time - $from_time) / 60,2). " minute";
?>