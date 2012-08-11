<table border="1">
<?php
include "mysqlconnect.php";
$query= mysql_query("SELECT * FROM  orders  ORDER by id DESC");

	while($row = mysql_fetch_array($query)){ 
             $oid = $row["id"];
			 $dname= $row["dname"];
			 $firstname= $row["firstname"];
			 $lastname= $row["lastname"];
			 $address = $row["deliveryaddress"];
			 $telephone= $row["telephone"];
			 echo "<tr><td>".$firstname." ".$lastname."</td><td>".$dname." </td><td>".$telephone." </td><td>".$address." </td>";
			 }
mysql_close();
			 
?>
</table>