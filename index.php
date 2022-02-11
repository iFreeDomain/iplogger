<?php


$ip = PHP_EOL . $_SERVER["REMOTE_ADDR"];


$file = fopen("ips.txt","a+");


fwrite($file,$ip);


echo "Your IP has been logged";
?>
