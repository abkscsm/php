<Html>
<head>
     <title>String Reverse Function</title>
</head>
<body>
<?PHP
function strreverse($name)
{
  $rev="";
  for($i=strlen($name)-1;$i>=0;$i--)
  {
   $rev=$rev.$name[$i];
  }
  return $rev;
 }
echo strreverse("rakrehnak ulab loma");
?>
</body>
</html>
