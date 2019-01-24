<?php 
	if(!isset($_SESSION['UserInfo']))
	{
		
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to the Trouble Ticket Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<body class="test">
<table class="banner" width="800" height="75"><tr><td></td></tr></table>
<table class="tablebackground" width="800">
<tr><td>
<p class="style2">Start Page</p>
<p class="style3">This is the start page for the Trouble Ticket Database. From here you can 
navigate to Add/ Update Users, Add/ Update Ticket Information, or Add/ Update Workstations</p>
<p class="style1">
<a href="UserAdd.PHP">Add User Information</a><br><br>
<a href="TicketAdd.PHP">Add Trouble Ticket Information</a><br><br>
<a href="WorkstationAdd.PHP">Add Workstation Information</a>
</p>

</td>
</tr>
</table>
</body>
</html>
