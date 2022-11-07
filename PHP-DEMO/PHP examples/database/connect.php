<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost:3306","root","atul");
if($con){
	print("DONE!!");
	}else{
		print("Oops!,Not done");
		}

mysql_select_db("mydata",$con)or die("Unable to find database");

$pets_query="SELECT * FROM games;";

$show=mysql_query($pets_query,$con);

while ($data=mysql_fetch_object($show))
{
	print($data->id."<br>");
	print($data->name."<br>");
	print($data->price."<br>");
}
mysql_close($con);

?>
</body>
</html>
