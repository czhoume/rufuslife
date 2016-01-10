<?php 
$time= time();
echo $time->format('Y-m-d H:i:s') . "\n";
$time->sub(new DateInterval('PT10H30S'));
echo $time->format('Y-m-d H:i:s') . "\n"; 
?>