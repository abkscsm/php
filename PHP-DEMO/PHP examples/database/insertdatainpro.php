<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect("localhost", "root", "atul") or die(mysql_error());
mysql_select_db("proinfo") or die(mysql_error());
// Insert a row of information into the table
mysql_query("insert into product (name,type,price,tax,totalprice) values ('Age of empire','stratergy','1000.00','12.12','00.00')") or die(mysql_error());
$row=mysql_fetch_array(mysql_query("select * from product"));
print($row['name']."<br>");
//calculating total price
$total=$row['price']+($row['price']/$row['tax']);
print($total);
mysql_query("update product set totalprice = '".$total."'"."")or die(mysql_error());
?>
</body>
</html>
