<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","atul") or die(mysql_error());
$db=mysql_select_db("proinfo",$con) or die(mysql_error());
$query1=mysql_query("select product.*,sale.totalprice from product,sale where product.id = sale.id") or die(mysql_error());
?>
<form id="form1" name="form1" method="post" action="">
  <input type="checkbox" name="checkbox" value="checkbox" />
  <input type="checkbox" name="checkbox" value="checkbox" />
  <input type="checkbox" name="checkbox" value="checkbox" />
  <input type="checkbox" name="checkbox" value="checkbox" />
  <input type="checkbox" name="checkbox" value="checkbox" />
</form>
</body>
</html>
