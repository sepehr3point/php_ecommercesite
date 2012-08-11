<?php
	include 'prodsearch.php';
?>


<html >
<head>

<title><?=$dname;?></title>
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
</head>
<body>
<div  id="mainbody">
<?php
include  "header.php" ;
?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="15">
  <tr>
    <td width="19%" valign="top"><img src="images/<?= $id; ?>.png" width="142" height="188" alt="<?=$dname; ?>" /><br />
      <a href="inventory_images/<?=$id; ?>.jpg">View Full Size Image</a></td>
    <td width="81%" valign="top"><h5><?=$dname; ?></h5>
      <p><?="$".$price; ?><br />
        <br />
        <?=$dtype;?> <br />
<br />
        <?php echo $details; ?>
<br />
        </p>
      <form id="form1" name="form1" method="GET" action="buy.php">
        <input type="hidden" name="id" id="pid" value="<?= $id; ?>" />
        <input type="submit"  id="button" value="Buy" />
      </form>
      </td>
    </tr>
</table>
Submit a Review

  </div>

</div>
</body>
</html>