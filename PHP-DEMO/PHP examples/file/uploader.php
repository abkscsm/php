<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
// Where the file is going to be placed 
$target_path = "uploads/";

/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); //uploadedfile it is a form field name it takes a path
$_FILES['uploadedfile']['tmp_name'];  
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    print("The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded");//basename( $_FILES['uploadedfile']['name']) prints a file name ex.1.jpg
} else{
    print("There was an error uploading the file, please try again!");
}

?>
</body>
</html>
