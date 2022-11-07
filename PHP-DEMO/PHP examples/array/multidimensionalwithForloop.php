<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//defining multidimensional array
$friends=array(array("name"=>"Mahesh","age"=>21,"occupation"=>"Animator"),
			array("name"=>"Anil","age"=>24,"occupation"=>"Faculty"),
			array("name"=>"Sagar","age"=>21,"occupation"=>"Graphic Designer"),
			array("name"=>"Raheel","age"=>20,"occupation"=>"Faculty"));
for($arr=0;$arr<count($friends);$arr++)
{
print($friends[$arr]["name"]." ".$friends[$arr]["age"]." ".$friends[$arr]["occupation"]."<br>");
}
?>
</body>
</html>
