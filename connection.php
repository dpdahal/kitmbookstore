<?php

$host="localhost";
$user="root";
$password="admin";
$db="kitmbookstore";

$conn=mysqli_connect($host,$user,$password,$db);
if(!$conn){
    echo "Database connection failed: ";
}

?>
