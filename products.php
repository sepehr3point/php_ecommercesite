<html>
<head>
<title> Welcome to Sixth Sense Restaurent</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<script src="scripts/jquery-1.7.2.min.js"></script>
<script src="scripts/camera.min.js"></script>

</head>
<body>
<div id="mainbody">
<?php include  "header.php" ;
?>
<div id="content"  style>
<td colspan="6"><center><img src="images/image2.jpg" alt="rotating image" width="900" height="200" id="rotator"><center></td>

<?php
include "mysqlconnect.php";

$query= mysql_query("SELECT * FROM  dishes ORDER BY id DESC LIMIT 5");
$n = mysql_num_rows($query);

//$sql = mysql_query("SELECT * FROM products ORDER BY date_added ");
 // count the output amount

	while($row = mysql_fetch_array($query)){ 
             $id = $row["id"];
			 $product_name = $row["dname"];
			 $price = $row["price"];
			 $dtype = $row["dtype"];
			 echo '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '">
		  <img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="140" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            Rs.' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';
    }
 
mysql_close();
?>
</div>



</div>
</body>
</html>