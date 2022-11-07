<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New Student</title>
	<style type="text/css">
		.content{
			border: 1px solid black;
			padding: 10%;
		}
		.form-field{
			margin: 20px;
			display: flex;
		}
		.form-field label{
			width: 30%;
			padding: 15px;
		}
		.form-field input{
			font-size: 20px;
			font-weight: bold;
			width: 60%;
			padding: 15px;
		}
		.btn-green{
			border-radius: 15px;
			background-color: #1eeb81;
			color: white;
			font-size: 25px;
			font-weight: bold;
			margin: 20px 50px;
			padding: 20px;
			text-transform: uppercase;
		}
		.btn-green:hover{
			background-color: #0a780d;
			/*font-size: 30px;
			padding: 25px;*/

		}
	
	</style>
</head>
<body>
	<div class="content">
		<h1>Registration Form</h1>
		<form method="post" action="index.php">
			<div class="form-field">
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="First Name"  required>
			</div>
			<div class="form-field">
				<label for="lastName">Last Name</label>
				<input type="text" name="lastName" id="lastName" placeholder="Last Name"  required>
			</div>
			<div class="form-field">
				<label for="emailid">Email Id</label>
				<input type="text" name="emailid" id="emailid" placeholder="Email ID"  required>
			</div>
			<div class="buttons-wrap">
				<button class="btn-green" type="reset">Reset</button>
				<button name="submit" class="btn-green" type="submit">Submit</button>
			</div>
		</form>
	</div>
	
</body>
</html>