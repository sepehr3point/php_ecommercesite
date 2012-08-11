<?php
include "mysqlconnect.php";
$username= $_SESSION['username'];
$query= mysql_query("SELECT * FROM user WHERE username='$username'");

	while($row = mysql_fetch_array($query)){ 
             $pid = $row["id"];
			 $firstname = $row["firstname"];
			 $lastname = $row["lastname"];
			 $deliveryaddress = $row["deliveryaddress"];
			 $telephone = $row["telephone"];
	
			 
    }
 
mysql_close();
?>