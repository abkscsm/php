<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$local="Kamalakar";	
function local()
{	
	global $local;
	print("Here "."$"."local"." defined outside of the function"." But by global statement I made it global."."<br>"."Variable value is ".$local);
}
local();
?>
</body>
</html>
