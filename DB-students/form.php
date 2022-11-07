<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
	<?php
	$firstName = $lastName = '';
	if(!empty($_POST)){
		require "inc/connection.php";
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$emailid = $_POST['emailid'];
		$sql = "INSERT INTO student (firstname,lastname,email) values ('$firstName','$lastName','$emailid');";
		if ($conn->query($sql) === TRUE) {
		  echo "<br>Recored inserted successfully";
		} else {
		  echo "<br>Error while inserting b: " . $conn->error;
		}
	}
	?>
	<form method="post"><!--  action="inc/form-data.php" -->
		<input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>" required>
		<input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>"  required>
		<input type="text" name="emailid" placeholder="Email ID" value="<?php echo $emailid; ?>"  required>
		<button type="submit">Submit</button>
	</form>
</body>
</html>