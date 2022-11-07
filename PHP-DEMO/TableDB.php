<Html>
<Head>
      <Title> Database Demo</Title>
</Head>
<Body>
<?PHP
$con=mysql_Connect("localhost","Amol","amolbk");
if($con)
echo"Connected Successfully<Br/>";
else
echo"Can Not Connect".mysql_error();
if(mysql_select_db("INFO",$con))
echo"database selected successfully<Br/>";

$sql="CREATE TABLE Demo(
Fname varchar(20)NOT NULL,
Lname varchar(20),
About varchar(40))";
if(mysql_query($sql,$con))
echo"Table Created";
else
echo"Error :".mysql_error();
mysql_close($con);
?>
</Body>
</Html>
