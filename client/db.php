<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "discuss";


$conn = new mysqli($host, $username, $password, $database);

if($conn){
   // echo "Connection Successfull..";
}else{
   // echo " Connection Failed!...";
}