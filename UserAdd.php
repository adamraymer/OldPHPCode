<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Add User</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<body class="test">
<?php
	require('OpenConnection.inc');
?>
<?php
	require('CloseConnection.inc');
?>

<table class="banner" width="800" height="75"><tr><td></td></tr></table>

<table width="800" class="tablebackground">
<tr><td>
<blockquote class="tablebackground"><p class="style2">Add User Information</p>
<p class="style3">Add user information here.</p></blockquote>
<blockquote class="tablebackground">
<p class="style1">
<form action="Submit" method="post" name="AddUser">
Name: <input name="Name" type="text" size="80" maxlength="80">
<br>
Email: <input name="Email" type="text" size="81" maxlength="50">
<br>
Phone: <input name="Phone" type="text" size="80" maxlength="50">
<br>
LDAPDN: <input name="LDAPDN" type="text" size="76" maxlength="100">
<br>
Rights: <input name="Rights" type="text" size="80" maxlength="50">
<br>
Active: <input name="Active" type="radio" value="" checked>&nbsp; <input name="Inactive" type="radio" value=""><br>
<br><br>
<p align="center"><input name="Submit" type="submit" value="Submit">
<input name="Reset" type="reset" value="Reset">
</p>
</form>
</p>
</blockquote>
</td></tr>
</table>
</body>
</html>
