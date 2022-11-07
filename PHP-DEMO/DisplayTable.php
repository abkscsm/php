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
echo"<Table Border=1>
 <TR>
 <TH>Fisrt Name</TH>
 <TH>Fisrt Name</TH>
 <TH>Fisrt Name</TH>
 </TR>";
while($rec=mysql_fetch_array($allrec))
{
 echo"<TR>";
 echo "<Td>".$rec['Fname']."</Td>";
 echo "<Td>".$rec['Lname']."</Td>";
 echo "<Td>".$rec['About']."</Td></TR>";
}
echo"</Table>";
mysql_close($con);
?>
</Body>
</Html>
