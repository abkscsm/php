<Html>
<Head>
      <Title> Database Demo</Title>
</Head>
<Body>
<Center>
<Form Action="HBird.php" method="Post">
User Name:<Font Color="Red">*</Font><Input type="Text" name="uname"><Br/><Br/>
Password:<Font Color="Red">*</Font><Input type="password" name="pass"><Br/><Br/>
<Input type="submit" Value="Login" name="submit">
</Form>
</Center>

<?PHP
function isUserValid($User,$Password)
{
  $con=mysql_Connect("localhost","Amol","amolbk");
  if(mysql_select_db("Hbird",$con))
 echo"database selected successfully<Br/>";
 $sql="Select * From userdata";
 $allrec=mysql_query($sql,$con);
 while($rec=mysql_fetch_array($allrec))
 {
 $User1=$rec['Username'];
 $Pass=$rec['Password'];
 if($User==$User1)
  {
   if($Password==$Pass)
    echo "Done Successfully";
   else
    echo "Password Does Not Match";
  } 
 }
}
if(isset($_POST['submit']))
{
  $User=$_POST['uname'];
  $Pass=$_POST['pass'];
  isUserValied($User,$Password);
}

?>
</Body>
</Html>
