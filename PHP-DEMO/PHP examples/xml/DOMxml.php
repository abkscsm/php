<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
  $file=new DOMDocument();
$file->load("xfile.xml");
$list=$file->getElementsByTagName("listName");
$group=$file->getElementsByTagName("groupName");
$name=$file->getElementsByTagName("name");
print("<h1>".$list->item(0)->nodeValue."</h1>");
print("<h3>".$group->item(0)->nodeValue."</h3>");
print("<h4>".$name->item(0)->nodeValue."</h4>");
?>

</body>
</html>
