<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
function table($width=200,$height=200)
{
	print("<table width='".$width."'"." height='".$height."' bordercolor='red' border='2'>"."<tr>"."<td align='center'>"."Width=".$width."<br>".
	"Height=".$height."</td>"."</tr>"."</table>");
}
table();//it will take default value from arguments


?>
</body>
</html>
