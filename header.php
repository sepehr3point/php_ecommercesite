
<?php 
session_start();

if($_SESSION)
 echo   "<div  style='text-align:right'> Welcome ".$_SESSION['username']." <br/><a href='logout.php'>logout</a></div>";
else echo "

<div id='loginform'  >
<table  >
  <form id='login'   action='login.php' method='POST'  name='login'>
    <tr>
	<td><label >Username</label></td>
	<td><input type='text' name='username' id='username' />
     </tr>
	<tr>
    <td><label>Password</label></td>
    <td><input type='password' name='password' id='password' /></td>
	</tr>
	<tr><td></td><td><input type='submit'  value='Login' id='submit'>  <a href='register.php'>Register</a></td>
  </form>
 </table>
</div>"
?>
</br>

<div id='pageHeader'i><table width='100%' border='0' cellspacing='0' cellpadding='12'>
 <img src='images/logo.png'  width= '900'  height='200'/>
    </div>
<ul class='navigation '>
		<li><a href="index.php">Home</a> </li>
		<li><a href="products.php">Products</a></li>
		<li> <a href="reviews.php">Write a Review</a></li>
		<li> <a href="contact.php">Contact</a></li>
    </ul>

   
   
 

<?php

?>