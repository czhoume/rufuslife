<?php 
$id=$_POST['act'];
echo $id."<br>";
$num=$_POST['delay'];
echo $num."<br>";
$time= new DateTime();
echo $time->format('Y-m-d H:i:s') . "<br>";
$time->sub(new DateInterval('PT'.$num.'M'));
echo $time->format('Y-m-d H:i:s') . "<br>"; 
$time=$time->format('Y-m-d H:i:s');
echo $time; 
?>