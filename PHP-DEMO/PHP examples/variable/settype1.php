<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//Variable declaration
$x=23.23; // Double data type

/* here,Gettype() function gets the data type of variable.
Here,print function will print data type of variable.*/

//Here,Also we used HTML to formatting text.

print "<h1>"."Variable X is a ".gettype($x)." ".$x."</h1>";

// Now,we are setting variable X's data type to another data type
// settype() function sets variables data type to another data type
settype($x,integer);

// Printing variable after changing its data type

print "<h1>"."Now,Variable X is a ".gettype($x)." ".$x."</h1>";
?>

</body>
</html>
