<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
class stud{
var $array1;
var $arrayslice;
var $addition=0;
function stud($data)
{
$this->array1=$data;
}
function total()
{
	$this->arrayslice=array_slice($this->array1,1);
	foreach($this->arrayslice as $tot)
	{
		$this->addition=$this->addition+$tot;
	}
}
function sheet()
{
		foreach($this->array1 as $x)
		{
			print("<td>".$x."</td>");
		}
		print("<td>".$this->addition."</td>");
}
}
	print("<table>"."<tr>"."<td>"."Name"."</td>"."<td>"."Maths"."</td>"."<td>"."Phy"."</td>"."<td>"."Chem"."</td>"."<td>"."Total"."</td>"."</tr>");
		print("<tr>");
$obj1=new stud(array("Atul",67,76,79));
$obj1->total();
$obj1->sheet();
print("</tr>");
	print("<tr>");
$obj2=new stud(array("Kamalakar",87,96,69));
$obj2->total();
$obj2->sheet();
		print("</tr>");
		print("</table>");
?>
</body>
</html>
