<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$pre1=abs(-122);
print($pre1."<br>");
$date=array("date1"=>"d","date2"=>"D","date3"=>"l","mon1"=>"m","mon2"=>"M","mon3"=>"F","year1"=>"y","year2"=>"Y");

foreach($date as $key => $val)
{
print($key."=".date($val)."<br>");
}



?>
</body>
</html>
