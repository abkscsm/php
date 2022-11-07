<Html>
<Head>
      <Title> Database Demo</Title>
</Head>
<Body>
<?PHP
$con=mysql_Connect("localhost","Feed","sandy");
if($con)
echo"Connected Successfully<Br/>";
else
echo"Can Not Connect".mysql_error();
if(mysql_query("CREATE DATABASE FeedBack",$con))
echo"Database is Created";
else
echo"Can not Create Database".mysql_error();
mysql_close($con);
?>
</Body>
</Html>
