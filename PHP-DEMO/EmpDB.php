<html>
<head>
<title>Insert Update Delete</title>
</head>
<body>
<?PHP
     $con=mysql_connect('localhost','Amol','amolbk');
	 mysql_select_db('Ram',$con);
	
	 if(isset($_POST['Sub']))
	 {
	    $name=$_POST['name'];
	    $add=$_POST['add'];
		$qr="SELECT * FROM EMP";
		$allrec=mysql_query($qr,$con);
		$no=0;
		while($rec=mysql_fetch_array($allrec))
        $no++; 
	    $insert="INSERT INTO EMP(Id,Name,Address)values('$no','$name','$add')";
        $insrt=mysql_query($insert,$con);
	 }
	 
	if(isset($_POST['Del']))
	{
	  $i=$_POST['id'];
	  $delete="DELETE FROM EMP where Id='$i'";
      $insrt=mysql_query($delete,$con);
	}
	
  if(isset($_POST['Updt']))
	 {
	    $name=$_POST['name'];
	    $add=$_POST['add'];
	    $id=$_POST['id'];
	    $update="UPDATE EMP SET Name='$name',Address='$add' WHERE Id='$id'";
        $Updat=mysql_query($update,$con);
	 }	 
?>	
<FORM action="EmpDB.php" method="post">
<table border="0">
<TR>
<TH>Enter Name</TH><Td><input type="text" name="name" /></Td>
</TR>
<TR>
<TH>Enter Address</TH><Td><input type="text" name="add" /></Td>
</TR>
<TR>
<TH>Enter Id to Update Record</TH><Td><input type="text" name="id" /></Td>
</TR><TR>
<TD><input type="submit" name="Sub" value="Submit" /></TD>
<TD><input type="submit" name="Del" value="Delete" /></TD> 
<TD><input type="submit" name="Updt" value="Update" /></TD>
</TR>
</table>
</FORM>
</body>
</html>
