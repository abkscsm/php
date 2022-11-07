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

foreach($_POST['c1'] as $val)
{
	$query2=mysql_query("select * from sale where name='".$val."'"."");
	while($row=mysql_fetch_array($query2))
 	{
  		print("Price of ".$row['name']." is ".$row['totalprice']."<br>");
  	}
}

  
?>
</body>
</html>
