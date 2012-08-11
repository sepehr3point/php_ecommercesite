<?php

session_start();
include "mysqlconnect.php";
	
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$deliveryaddress = $_POST['deliveryaddress'];


mysql_query("INSERT INTO user (firstname , lastname, username, password, email, telephone, deliveryaddress) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$telephone', '$deliveryaddress')");

 echo "User has been added to the system";
 header("Location: index.php");

?>