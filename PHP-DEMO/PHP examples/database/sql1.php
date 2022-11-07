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
$myquery=mysql_query("select * from games where id = 4");
if(!$db)
{
	print("Couldn't find database");
}else{
	$row=mysql_fetch_row($myquery);
	print($row[1]);
	}

mysql_close($con);

?>
</body>
</html>
