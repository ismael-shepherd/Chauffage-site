<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "photo";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    echo "Connection failed !";
    exit();
}