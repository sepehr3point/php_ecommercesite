<?php
session_start();
$dname=$_GET['id'];
include "userdata.php";
include "mysqlconnect.php";
mysql_query("INSERT INTO orders (firstname , lastname, telephone, deliveryaddress,dname) VALUES ('$firstname', '$lastname','$telephone', '$deliveryaddress','$dname')");
header("Location: index.php");
mysql_close();
?>
