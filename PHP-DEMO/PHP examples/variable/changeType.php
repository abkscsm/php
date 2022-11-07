<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//changing data type of variable by casting

$var=3.14;
$container=(double)$var;
print ("Double value ".$container."<br>");
$container=(integer)$var;
print ("Integer value ".$container."<br>");
$container=(string)$var;
print ("String value ".$container."<br>");
$container=(boolean)$var;
print ("Boolean value ".$container."<br>");
?>
</body>
</html>
