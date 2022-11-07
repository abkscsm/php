<?php
	if(!empty($_POST)){
		if(isset($_POST['submit'])){
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$emailid = $_POST['emailid'];
			$sql = "INSERT INTO student (firstname,lastname,email) values ('$firstName','$lastName','$emailid');";
			if ($conn->query($sql) === TRUE) {
			  echo "<br>Recored inserted successfully";
			} else {
			  echo "<br>Error while inserting b: " . $conn->error;
			}
		}else if (isset($_POST['delete'])) {
			// code...
		}
		
	}
	$select_sql = "SELECT * FROM student";
	$result = $conn->query($select_sql);
	?>