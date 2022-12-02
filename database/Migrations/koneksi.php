<?php
$hostname = "localhost";
$hostuser = "root";
$hostPass = "";
$hostDB = "shopmarket";
$hostPort = "3306";

$con = new mysqli($hostname, $hostuser, $hostPass, $hostDB, $hostPort);

if(!$con){
    echo "Database Connectoin Failed : ".mysqli_connect_errno() or mysqli_connect_error();
}
?>