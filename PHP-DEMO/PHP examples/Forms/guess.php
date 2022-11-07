<?php
$num=23;
$try;
$massage="";
if(isset($try))
{
	++$try;
}else{
$try=0;
}
if(!isset($_POST["guess"]))
{
	$massage="Welcome";
}elseif($_POST["guess"]<$num)
{
	$massage="Too Low!!";
	}
elseif($_POST["guess"]>$num)
{
	$massage="Too High!!";
	}
	else
{
	$massage="congrates";
	}
$_POST["guess"]=(int)$guess;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2><?php print ($massage)?></h2>
Number of tries=<?php print($try)?>
<br />
<form id="form1" name="form1" method="post" action="">
  <input name="guess" type="text" id="guess" />
  <input type="submit" value="Try" />
</form>
</body>
</html>
