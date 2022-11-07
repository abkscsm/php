<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="form2Request.php">
  Name
  <input name="name" type="text" id="name" />
  <br />
Address
<input name="add" type="text" id="add" size="30" />
<br />
Gender
<table width="200">
  <tr>
    <td><label>
      <input type="radio" name="gender" value="Male" />
      Male</label></td>
  </tr>
  <tr>
    <td><label>
      <input type="radio" name="gender" value="Female" />
      Female</label></td>
  </tr>
</table>
<br />
Country
<select name="country" id="country">
  <option value="Austrelia" selected="selected">Austrelia</option>
  <option value="Bamgladesh">Bangladesh</option>
  <option value="Chin">Chin</option>
  <option value="India">India</option>
  <option value="Japan">Japan</option>
</select>
<br />
<input type="submit" value="Submit" />
</form>
</body>
</html>
