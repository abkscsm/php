<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="alltext2.php">
  <input name="num" type="text" id="num" />
  <input type="submit" value="Submit" />
</form>
<?php 
if(isset($_POST["num"]))
{
if(strpos($_POST["num"],"aa")===2)
{
	print ("Ok!!!");
}else{
    print("It's wrong");
}
}
?>
</body>
</html>
