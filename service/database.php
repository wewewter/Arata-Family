<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "arata";

$db = mysqli_connect($hostname,$username,$password,$database);

if($db->connect_errno) {
    echo "Database is error";
    die("error!");
}

?>