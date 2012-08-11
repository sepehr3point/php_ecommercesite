<html>
<head>
<title> Welcome to Ganzu Restaurent</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<script src="scripts/jquery-1.7.2.min.js"></script>
<script src="scripts/camera.min.js"></script>

</head>
<body>
<div id="mainbody">
<?php include  "header.php" ;
?>
<div id="content"  style>
<?php
if($_SESSION)
{
echo "";
include 'prodsearch.php';

}
else
die ("You are not logged in . Please <a href='index.php'>Login</a>");
?>
<br/>
<h4>Requested Dish</h4><br/>
<form id="buy" name="buy" method=""POST" action="checkout.php">
<tr>
<td width="61%" valign="top"><?=$dname; ?></td>
 <td>  <?="$".$price; ?></td>
 </tr>
 <tr><td>Your Details</td></tr>
 <?php include "userdata.php";
 echo '<table width="60%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          
          <td >Name</td><td>'. $firstname . '  '.$lastname.'</td></tr>
           <tr><td>Address</td><td>' . $deliveryaddress . '</td><br />
            </td>
        </tr>
      </table>';
 ?>
 <tr><td>&nbsp </td><td>
		<input type="hidden" name="id" id="dname" value="<?= $dname; ?>" />
        <input type="submit"  id="button" value="Confirm" />
      </td>
</form>
</div>

 

</div>
</body>
</html>