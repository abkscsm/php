<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
print("<table border='1' bordercolor='red'>");
for($i=1;$i<=10;$i++)
{
	print("<tr>");	
	for($j=2;$j<=100;$j++)
		{
			print("<td>".$i*$j."</td>");
		}
	print("</tr>");
}
print("</table>");



?>
</body>
</html>
