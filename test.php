<?php 

$time= new DateTime();
$timenow=$time;
echo $timenow->format('Y-m-d H:i:s') . "<br>";
$time->sub(new DateInterval('PT10M'));
echo $time->format('Y-m-d H:i:s') . "<br>";
$diff=round ((($timenow - $time))/60);
echo "look at this ". $diff;
?>