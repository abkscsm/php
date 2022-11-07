<Html>
<Head>
<Title> Display DB</Title>
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

$sql="Select * From demo";
$allrec=mysql_query($sql,$con);
echo"FName\t\tLname\t\tAbout<Br/>";
while($rec=mysql_fetch_array($allrec))
{
 echo $rec['Fname']."\t";
 echo $rec['Lname']."\t";
 echo $rec['About']."<Br/>";
}
mysql_close($con);
?>
</Body>
</Html>
