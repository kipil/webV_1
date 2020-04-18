<?php 
$serverName =   "localhost";
$dbName     =   "datosMexico";
$username   =   "root";
$pass       =   "";

$conn = mysqli_connect($serverName,$username,$pass,$dbName);

if(!$conn){

    die("Connection Failed : ".mysqli_connect_error());
}
echo "Connection Successfull <br>";






?>