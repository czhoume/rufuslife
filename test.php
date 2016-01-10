<?php 
$time= date('Y-m-d H:i:s', time());
$time = date("Y-m-d H:i:s", strtotime("-$_POST['delay'] minutes", strtotime($time)));
echo $time; ?>