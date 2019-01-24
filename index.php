<?php 
	session_start();
	
	if(!isset($_SESSION['UserInfo']))
	{
		$_SESSION['UserInfo'] = array(4);
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Trouble Ticket Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<body>
<table class="tablebackground" width="800">
<tr><td class="banner" height="75"></td></tr>
<tr><td class="style2"><p>Login: </p></td></tr>
<tr><td class="style3">This is he login page for the Trouble Ticket Database</td></tr>
<tr><td class="style1" align="center"><form action="StartPage.PHP" method="post" name="Login" id="Login">
Username:<input name="User" type="text" size="50"><br>
Password:<input name="Pass" type="text" size="50"><br>
<input name="Submit" type="submit" value="Submit">
<input name="Reset" type="reset" value="Reset">
</form></td></tr>

</table>
<?php
	if(isset($_POST['User']))
	{
		$_SESSION['UserInfo'][0] = $_POST['User'];
	}
	
	if(isset($_POST['Pass']))
	{
		$_SESSION['UserInfo'][1] = $_POST['Pass'];
	}
 
?>

</body>
</html>
