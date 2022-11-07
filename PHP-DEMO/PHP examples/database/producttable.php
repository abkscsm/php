<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "atul") or die(mysql_error());
mysql_query("CREATE DATABASE proinfo") or (mysql_error());
mysql_select_db("proinfo") or die(mysql_error());

// Create a MySQL table in the selected database
mysql_query("CREATE TABLE product(
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  type VARCHAR(45) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  tax DECIMAL(10,2) NOT NULL,
  totalprice DECIMAL(10,2),
  PRIMARY KEY (id))")
 or die(mysql_error());  

echo "Table Created!";

?>

</body>
</html>
