<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//In this example I use variable for increment
//That variable made global in function
//But here if I change variable value later the increment will taken by that change
//So,variable should be make local for following function.
//I made it in "static.php" file

$counter=0;	//Incremental Variable
function local($friends)
{	
	global $counter;//Made it globle
	$counter++;//Incremented
	print($counter." ".$friends."<br>");
}
local("Mahesh");//pass the arguments
local("Sagar");
local("Anil");
$counter=6;//Here,I changed variable value
local("Raheel");//Now,function takes value from change 
?>
</body>
</html>
