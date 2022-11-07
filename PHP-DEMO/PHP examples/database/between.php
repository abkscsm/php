<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost:3306","root","atul") or die("Sorry,could not connect!");
$db=mysql_select_db("mydata",$con);
$query=mysql_query("select * from games where price between 500 and 1000");
while($row=mysql_fetch_array($query))
{
	print($row['name']."<br>");
}

?>
</body>
</html>
