<?php 
$num=10;
$time= new DateTime();
echo $time->format('Y-m-d H:i:s') . "\n";
$time->sub(new DateInterval('PT'.$num.'M'));
echo $time->format('Y-m-d H:i:s') . "\n"; 
$time=$time->format('Y-m-d H:i:s');
echo $time; 
?>