<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="Results.php" method="post" target="_blank">
<table>
<tr><td>Name: <input name="filterName" type="text"></td><td>Assigned To: <input name="filterAssigned" type="text"></td></tr>
<tr><td>Building/ Location: <input name="filterBuilding" type="text"></td><td>Status: <input name="filterStatus" type="text"></td></tr>
<tr><td><input type=submit value="Submit Query">
 <input type=reset></td></tr>
</table>
</form>
<?php
$link = mysql_connect("localhost","root","novell")
			or die("Could not connect! Error:  ".mysql_error());
			
mysql_select_db("tTicket",$link)
			or die("Trouble opening Trouble Ticket Database. Error:  ".mysql_error());
			
$mainQuery = "Select ID, Created, Status, ReportedBy, Location, Building, Room, CompType, CompModel, ModNum, SerialNum, Phone, EMail, Priority, AssignedTo, Scheduled, Problem, Comments FROM TroubleTicket";

$results = mysql_query($mainQuery,$link) or die("Could Not Insert. Error:  ".mysql_error());

echo ('<form action="Edit.php" method="post" target="_blank">');
echo ('<table border="1">');

while($line = mysql_fetch_row($results))
{
	echo('<tr><td>ID:</td><td>Date Created:</td><td>Status:</td><td>Reported By</td><td>Location</td><td>Building</td><td>Room</td><td>Computer Type:</td><td>Computer Model:</td><td>Model#</td><td>Serial#</td><td>Phone:</td><td>E-Mail</td><td>Priority:</td><td>Assigned To:</td><td>Scheduled:</td><td width = "1000">Problem:</td><td width = "40">Comments:</td></tr>');
	echo ('<tr>');
	foreach($line as $key => $value)
	{
		if($key == 0)
		{
			echo('<td>');
			echo('<input name="ID" type=hidden value='.$line[$key].'>');
			print "$key";
			print "$line[$key]";
			echo('</td>');
		}
		else
		{
			echo('<td>');
			print "$line[$key]";
			echo('</td>');
		}
	}
	echo ('<td><input type=submit value="Edit"</td></tr>');
}
echo('</table>');
echo('</form>');
mysql_close($link);
?>
</body>
</html>
