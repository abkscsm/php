<Html>
<Head>
<Title> Form Demo</Title>
</Head>
<Body>
<?PHP
if(isset($_POST['Submit']))
{
 if(empty($_POST['fname']))
 echo "First Name Must Entered";
 if(empty($_POST['lname']))
 echo "Last Name Must Entered";
 else
 {
 echo $_POST['fname']."<Br/>";
 echo $_POST['lname']."<Br/>";
 echo $_POST['about']."<Br/>";
 }
}
?>
<Center>
<Form Action="Form1.php" method="Post">
First Name:<Font Color="Red">*</Font><Input type="Text" name="fname"><Br/><Br/>
Last Name:<Font Color="Red">*</Font><Input type="Text" name="lname"><Br/><Br/>
About Me:<Textarea name="about"></Textarea><Br/><Br/>
<Input type="Reset" Value="Reset" name="Reset">
<Input type="Submit" value="Go" name="Submit">
</Form>
</Center>
</Body>
</Html>