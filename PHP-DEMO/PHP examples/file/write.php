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
$open=fopen($file,"w");
//writing into a file
$data="Xplora Design Skool\n";
fwrite($open,$data);
$data="Aski Computers";
fwrite($open,$data);
//closing a file
fclose($open);
?>
</body>
</html>
