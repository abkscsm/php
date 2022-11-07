<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//coding using function
//Here we making simple "MyName()" function with Arguments

function MyName($name) // Given name to funcion MyName().Defined one variable by which we are passing different names //
	{
		print $name."<br>"; //Simply printing the variable contains "Kamalakar"
	}
//After,calling the function it will print which string we have passed

MyName("Kamalakar"); //Calling the function with passing string no 1
MyName("Anil"); //Calling the function with passing string no 2
MyName("Sagar"); //Calling the function with passing string no 3
?>



</body>
</html>
