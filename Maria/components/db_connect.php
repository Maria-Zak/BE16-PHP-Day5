<?php

$localhost = "localhost";
$username = "root";
$password = "";
// $dbname = "login";
$dbname = "restaurant";


$connect = new  mysqli($localhost, $username, $password, $dbname);


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
} else {
  // echo "Successfully Connected";
}