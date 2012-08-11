<?php 

if (isset($_GET['id'])) {
	
    include "mysqlconnect.php"; 
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 

	$query= mysql_query("SELECT * FROM  dishes WHERE id='$id' LIMIT 1");
	$productCount = mysql_num_rows($query); 
    if ($productCount > 0) {
		
		while($row = mysql_fetch_array($query)){ 
			 $dname = $row["dname"];
			 $price = $row["price"];
			 $details = $row["details"];
			 $dtype= $row["dtype"];
         }
		 
	} else {
		echo "That item does not exist.";
	    exit();
	}
		
} else {
	echo "Data to render this page is missing.";
	exit();
}
mysql_close();
?>