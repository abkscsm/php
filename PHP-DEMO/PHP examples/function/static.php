<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//In this example I use variable for increment
//That variable made static in function
//so variable is local for perticular function
$counter=0;	//Incremental Variable
function local($friends)
{	
	static $counter;//Made it static
	$counter++;//Incremented
	print($counter." ".$friends."<br>");
}
local("Mahesh");//pass the arguments
local("Sagar");
local("Anil");
$counter=6;//Here,I changed variable value
local("Raheel");//Here,result cannot change because I have made variable static means local for function  
?>
</body>
</html>
