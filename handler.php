<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ticket Request</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$link = mysql_connect("localhost","root","novell")
			or die("Could not connect! Error:  ".mysql_error());
			
mysql_select_db("tTicket",$link)
			or die("Trouble opening Trouble Ticket Database. Error:  ".mysql_error());
			
$insert = "INSERT into TroubleTicket (Created, ReportedBy, Location, Building, Room, CompType, CompModel, ModNum, SerialNum, Phone, EMail, Priority, Problem) VALUES ('$_POST[dateCreated]', '$_POST[uName]', '$_POST[Location]', '$_POST[Building]', '$_POST[Room]', '$_POST[compType]', '$_POST[compModel]', '$_POST[modelNum]', '$_POST[serialNum]', '$_POST[Phone]', '$_POST[eMail]', '$_POST[Priority]', '$_POST[textarea]')";
		
mysql_query($insert,$link) or die("Could Not Insert. Error:  ".mysql_error());

mysql_close($link);
			
echo '<table>';

if($_POST[uName] != "" && $_POST[Location] != "" && $_POST[Building] != "" && $_POST[eMail] != "" && $_POST[textarea] != "")
{
//sql connect and disconnect can go here
echo '<tr ><td><font size="3"><b>Your trouble ticket has been processed. Please print this page for your records</b></font></td></tr>';
echo ('<tr><td>Name: '.$_POST[uName].'</td></tr>');
echo ('<tr><td>Date Created: '.$_POST[dateCreated].'</td></tr>');
echo ('<tr><td>Location: '.$_POST[Location].'</td></tr>');
echo ('<tr><td>Building: '.$_POST[Building].'</td></tr>');
echo ('<tr><td>Room: '.$_POST[Room].'</td></tr>');
echo ('<tr><td>Computer Type: '.$_POST[compType].'</td></tr>');
echo ('<tr><td>Model Number: '.$_POST[modelNum].'</td></tr>');
echo ('<tr><td>Serial Number: '.$_POST[serialNum].'</td></tr>');
echo ('<tr><td>Phone: '.$_POST[Phone].'</td></tr>');
echo ('<tr><td>E-Mail: '.$_POST[eMail].'</td></tr>');
echo ('<tr><td>Priority: '.$_POST[Priority].'</td></tr>');
echo ('<tr><td>Problem: <br>'.$_POST[textarea].'</td></tr>'); 
}
else
{
	echo '<tr><td><font color="red"><b>Error: Missing Information</b></font></td></tr>';
	if($_POST[uName] == "")
	{
		echo '<tr><td>Missing Name</tr></td>';
	}
	if($_POST[Location] == "")
	{
		echo '<tr><td>Missing Location</td></tr>';
	}
	if($_POST[Building] == "")
	{
		echo '<tr><td>Missing Building</td></tr>';
	}
	if($_POST[eMail]=="")
	{
		echo '<tr><td>Missing E-Mail</td></tr>';
	}
	if($_POST[textarea]=="")
	{
		echo '<tr><td>Missing Problem</td></tr>';
	}
	
}
echo '</table>';
?>

</body>
</html>
