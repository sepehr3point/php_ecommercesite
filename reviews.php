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
echo "<center>Please Enter your Feedback</center>";


}
else
die ("<h3>You are not logged in . Please <a href='index.php'>Login</a></h3>");
?>
<form name="register" action='reviews.php' method='POST'>
<table width="735" height="386" border="0">
  <tr>
    <th height="19" colspan="2" align="center" valign="bottom" class="register" scope="row">Member Registration</th>
    </tr>
  <tr>
    <th height="21" align="right" class="text2" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width="294" align="right" class="text2" scope="row">Full Name</th>
    <td width="431"><input type="text" name="firstname"  size="50"/></td>
  </tr>
  <tr>
    <th align="right" class="text2" scope="row">Your Comments</th>
    <td><textarea name='message' rows="6" cols="40"></textarea></td>
 </tr>
  <tr>
    <th align="right" class="text2" scope="row">&nbsp;</th>
    <td><input type="submit" name="Submit" value="Submit" /></td>
  </tr>
</table>
</form>
</div>

 

</div>
</body>
</html>