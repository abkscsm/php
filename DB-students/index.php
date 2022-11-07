<?php
session_start();
require "inc/connection.php"; 
require "inc/db-queries.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Students</title>
	<style type="text/css">
		caption{
			font-size: 40px;
			font-weight: bold;
		}
		table, td, th {
		  border: 1px solid;
		  padding: 10px;
		}

		table {
		  width: 100%;
		  border-collapse: collapse;
		}
		.btn{
			border-radius: 15px;
			font-size: 25px;
			font-weight: bold;
			margin: 20px 50px;
			padding: 20px;
			text-transform: uppercase;
			text-decoration: none;
		}
		.btn-green{
			background-color: #1eeb81;
			color: white;
		}
		.btn-green:hover{
			background-color: #0a780d;
		}
		.btn-red{
			background-color: #ed4e74;
			color: white;
		}
		.btn-red:hover{
			background-color: #f2073f;
		}
		.btn-gray{
			background-color: #857d7d;
			color: white;
		}
		.btn-gray:hover{
			background-color: #121010;
		}
		
		.button-wrap{
			clear: both;
			margin-top: 100px;
		}
	</style>
</head>
<body>
	<h1><?php print("Welcome ".$_SESSION["user"]."!"); ?></h1>
	<table>
		<caption>List of records</caption>
		<thead>
			<tr>
				<th>Id</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Email Id</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
				  	$delbtn = '<button class="btn btn-red" >Delete</button>';
				  	$update = '<button class="btn btn-gray" >Update</button>';
				    echo "<tr>
				    		<td>".$row["id"]."</td>
				    		<td>".$row["firstname"]."</td>
				    		<td>".$row["lastname"]."</td>
				    		<td>".$row["email"]."</td>
				    		<td>".$delbtn.$update."</td>
				    	</tr>";
				  }
				} else {
				  echo "0 results";
				}
				$conn->close();
			?>
		</tbody>
	</table>
	<div class="button-wrap">
		<a href="add-student.php" class="btn btn-green">Add New</a>
	</div>
	
</body>
</html>