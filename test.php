<?php 
$time= date('Y-m-d H:i:s', time());
echo $time;
$time->sub(new DateInterval('PT10H30S'));
echo $time; 
?>