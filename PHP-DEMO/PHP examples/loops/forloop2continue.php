<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
for($x=1;$x<=10;$x++)
{
	print ($x);
	if($x==5)
	{
		print ("<br>");
		continue;
	}
}
print("<br>"."<br>");
for($count=-5;$count<=10;$count++)
{
	if($count==0)
	{
		print ("<hr>");
		continue;
	}
	print ((10/$count)."<br>");
}

?>
</body>
</html>
