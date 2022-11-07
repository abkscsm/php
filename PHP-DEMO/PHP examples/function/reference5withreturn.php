<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
function tax(&$vat)
{
	$p=$vat;
	$vat/=12.5;
	function totalPrice()
	{
		static $p;
		static $vat;
		$total=$p+$vat;
		return $total;
	}
	return totalPrice();
}
$price=1000;
print("Final Price after VAT is ".tax($price));
?>

</body>
</html>
