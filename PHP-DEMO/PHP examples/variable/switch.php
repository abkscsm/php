<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$color="blue";
print ("<table width='300' height='300'>");
print ("<tr>");
switch($color)
{
case "red":
print ("<td bgcolor='".$color."'>"."</td>");
break;
case "green":
print ("<td bgcolor='".$color."'>"."</td>");
break;
default:
print ("<td bgcolor='gray'>"."</td>");
break; 
}
print ("</tr>");
print ("</table>");
?>

</body>
</html>
