<Html>
<Head>
      <Title> Database Demo</Title>
</Head>
<Body>
<Center>
<Form Action="InsertDB.php" method="Post">
User Name:<Font Color="Red">*</Font><Input type="Text" name="fname"><Br/><Br/>
Password:<Font Color="Red">*</Font><Input type="password" name="lname"><Br/><Br/>
<Input type="submit" Value="Login" name="submit">
</Form>
</Center>

<?PHP
if(isset($_POST['submit']))
{
$con=mysql_Connect("localhost","Amol","amolbk");
if($con)
echo"Connected Successfully<Br/>";
else
echo"Can Not Connect".mysql_error();
if(mysql_select_db("Hbird",$con))
echo"database selected successfully<Br/>";

$sql="INSERT INTO userdata(Username,Password)values('$_POST[fname]','$_POST[lname]')";
if(mysql_query($sql,$con))
echo"Values Inserted";
else
echo"Error :".mysql_error();
mysql_close($con);
}
?>
</Body>
</Html>
