<?php
	 if(!isset($_SESSION['UserInfo']))
	{
		
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Add New Ticket</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<body class="test">
<?php
	require('OpenConnection.inc');
?>
<?php //add inforamtion for ticket
//create short variable names
	$AddDescription = $HTTP_POST_VARS['AddDesscription'];
	$Workstation = $HTTP_POST_VARS['Workstation'];
	$Tech = $HTTP_POST_VARS['Tech'];
	$Status = $HTTP_POST_VARS['Status'];
	$RequestDate = $HTTP_POST_VARS['RequestDate'];
	$CloseDate = $HTTP_POST_VARS['CloseDate'];
	$Priority = $HTTP_POST_VARS['Priority'];
	$Building = $HTTP_POST_VARS['Building'];
	$Floor = $HTTP_POST_VARS['Floor'];
	$Rooom = $HTTP_POST_VARS['Room'];
	$Notes = $HTTP_POST_VARS['Notes'];
	
	$newTicket = "insert into ___________ values ('".$AddDescription."', '".$Workstation."', '".$Tech."', '".$Status."', '".$RequestDate."', '".$CloseDate."', '".$Priority."', '".$Building."', '".$Floor."', '".$Room."', '".$Notes."'";
	$results = mysql_query($newTicket);   //hopefully this is set about about right
?>
<?php
	require('CloseConnection.inc');
?>

<table class="banner" width="800" height="75"><tr><td></td></tr></table>
<table width = "800" class="tablebackground">
<tr><td>
<div class="style2">Add New Ticket</div>
</td></tr>
<tr><td height="20" class="style1">
<p class="style3">Insert new ticket information here.</p>
<form action="Submit" method="post" name="AddTicket" id="AddTicket">
  <p>Issue Description:<br>
      <textarea name="AddDescription" cols="90" rows="3" id="AddDescription"></textarea>
	<br>
	Workstation: <input name="Workstation" type="text" id="Workstation" size="50">
	Tech: <input name="Tech" type="text" id="Tech" size="40"> 
	<br>
	Status: <select name="Status" size="1" id="Status">
	  <option value="Outstanding">Outstanding</option>
	  <option value="Closed">Closed</option>
	  <option value="Fixed/ Verified">Fixed/ Verified</option>
	  <option value="Fix Rejected">Fix Rejected</option>
	  <option value="More Information Needed">More Information Needed</option>
	  <option value="On Hold">On Hold</option>
	  <option value="Summer">Summer</option>
	  <option value="Cannot Reproduce">Cannot Reproduce</option>
	  <option value="User Error">User Error</option>
	  <option value="Testing">Testing</option>
	  <option value="Disregard">Disregard</option>
	  <option value="Rejected">Rejected</option>
	  </select>
Date	Opened: 
<input name="RequestDate" type="text" id="RequestDate" size="20"> 
Date Closed: 
<input name="CloseDate" type="text" id="CloseDate" size="20">
<br>
Priority: <select name="Priority" size="1" id="Priority">
  <option value="0">Very High</option>
  <option value="1">High</option>
  <option value="2">Medium</option>
  <option value="3">Low</option>
  <option value="4">Very Low</option>
</select>
Building: <input name="Building" type="text" id="Building" size="30">
Floor: <input name="Floor" type="text" id="Floor" size="10">
Room:<input name="Room" type="text" id="Room" size="15">
<br>
Notes:<br>

<textarea name="Notes" cols="90" rows="5"></textarea>
  <BR><BR>	
<p  align="center"  >

 <input type="submit" name="Submit" value="Submit">
 <input name="Reset" type="reset" id="Reset" value="Reset">
 </p></p>
</form>

</td>
</tr>
</table>
</body>
</html>
