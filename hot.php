<Center><h4>Recently added Dishes</h4></center>
<?php
include "mysqlconnect.php";

$query= mysql_query("SELECT * FROM  dishes ORDER BY id DESC LIMIT 5");
$n = mysql_num_rows($query);



	while($row = mysql_fetch_array($query)){ 
             $id = $row["id"];
			 $product_name = $row["dname"];
			 $price = $row["price"];
			 $dtype = $row["dtype"];
			 echo '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '">
		  <img style="border:#666 1px solid;" src="images/' . $id . '.png" alt="' . $product_name . '" width="140" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            Rs.' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';
    }
 
mysql_close();
?>
