<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
  // set the XML file name as a PHP string
  $myStoreList = "xfile.xml" ; 
  // load the XML file 
  $xml = @simplexml_load_file($myStoreList) or die ("no file loaded") ; 
  // assign the listName element to a string
  $nameOfStoreList = $xml->listName ;
  print("<h1>List: " . $nameOfStoreList . "</h1>");
  
  foreach ($xml->clothGroup as $clothGroup) {
  print("<h2>Cloth group name is " . $clothGroup->groupName . "</h2>");
  foreach ($clothGroup->item as $clothItem) {
      print("<br /> Item: " . $clothItem->name);
      print("<br /> Quantity: " . $clothItem->howMuch);
      print("<br />");
  }
  print("<br />");
}

?>

</body>
</html>
