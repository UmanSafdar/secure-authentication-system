<?php

$_SERVER = "localhost";
$username = "root";
$password = "";
$db = "login_sys";

// to connect to server

$conn = mysqli_connect($_SERVER, $username, $password, $db); 

if (!$conn) {

 die("Error".mysqli_connect_error());

}



?>