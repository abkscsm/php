<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$w=32;
$q=$w;
//store the value in another variable
$w=35;
print ($q."<br>"); //will print 32 not 35

$a=2;
$x=&$a;
//store the variable value in another variable by reference
print ("<font "."size='".$x."'".">"."Kamalakar"."</font>"."<br>"); //will be taken size 2
$a=7;
print ("<font "."size='".$x."'".">"."Kamalakar"."</font>"."<br>"); //will be taken size 7
?>
</body>
</html>
