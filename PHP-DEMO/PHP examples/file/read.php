<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//creating a file
$file="sample.txt";
//opening a file
$open=fopen($file,"r");//"r" is important
//reading the data
$readData=fread($open,1024);
//closing a file
fclose($open);
//printing the data
print($readData);
?>
</body>
</html>
