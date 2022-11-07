<?php
	if(!empty($_POST)){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		echo "Submitted Name is : $firstName $lastName";
	}
	
	?>