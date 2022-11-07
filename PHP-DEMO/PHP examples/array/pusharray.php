<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//defining multidimensional array
$oldfriends=array(1,2,3,4);
//adds another values in existing array with array_push
$allfriends=array_push($oldfriends,5,6,7,8);
//prints array using for each statement
foreach($oldfriends as $totalFriends)//array stored in variable totalFriends
{
print($totalFriends."<br>");
}
?>
</body>
</html>
