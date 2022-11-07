<?php
session_start();
$_SESSION["user"]=$_POST['name'];
?>
<?php
print("Welcome ".$_SESSION["user"]."!");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<a href="s3.php">S3.php</a>

</body>
</html>
