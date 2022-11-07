<Html>
<Head>
<Title> Form Demo</Title>
</Head>
<Body>
<?PHP
$show=true;
if(isset($_POST['Submit']))
{
 if(empty($_POST['fname']))
 echo "First Name Must Entered";
 if(empty($_POST['lname']))
 echo "Last Name Must Entered";
 else
 {
 echo "Name : ".$_POST['fname']."<Br/>";
 echo "Last Name : ".$_POST['lname']."<Br/>";
 echo "I think : ".$_POST['about']."<Br/>";
 }
 $show=false;
}


 if($show)
 {
 ?>
 <Center>
<Form Action="HideForm.php" method="Post">
First Name:<Font Color="Red">*</Font><Input type="Text" name="fname"><Br/><Br/>
Last Name:<Font Color="Red">*</Font><Input type="Text" name="lname"><Br/><Br/>
About Me:<Textarea name="about"></Textarea><Br/><Br/>
<Input type="Reset" Value="Reset" name="Reset">
<Input type="Submit" value="Go" name="Submit">
</Form>
</Center>
<?PHP
}
?>
</Body>
</Html>