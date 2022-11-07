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
$query1=mysql_query("select avg(price) as tot1 from games");
$query2=mysql_query("select count(price) as tot2 from games");
$query3=mysql_query("select sum(price) as tot3 from games group by type order by name");
while($row=mysql_fetch_array($query1))
{
	print($row['tot1']."<br>");

}
while($row=mysql_fetch_array($query2))
{
	print($row['tot2']."<br>");

}
while($row=mysql_fetch_array($query3))
{
	print($row['tot3']."<br>");

}
?>
</body>
</html>
