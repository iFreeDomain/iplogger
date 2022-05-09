<?php


$ip = PHP_EOL . $_SERVER["REMOTE_ADDR"];


$file = fopen("server.txt","a+");


fwrite($file,$ip);


echo "Server";
?>
