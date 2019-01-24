<?php
if(!isset($_SESSION['UserInfo']))
	{
		
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Add Workstation Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--
-->

<link href="test1.css" rel="stylesheet" type="text/css">
</head>

<body class="test">
<?php
	require('OpenConnection.inc');
?>
<?php //All of this will probably be moved to an include file, and called from there.
//create short variable names
	$WorkstationName=$HTTP_POST_VARS['WorkstationName'];
	$WorkstationSerial=$HTTP_POST_VARS['WorkstationSerial'];
	$WorkstationMFG = $HTTP_POST_VARS['WorkstationMFG'];
	$WorkstationOS = $HTTP_POST_VARS['WorkstationOS'];
	$Active = $HTTP_POST_VARS['Active']; //Only need one, depending on if Active is checked or inactive is checked
	
		
	$newAddition = "insert into ___________ values ('".$WorkstationName."', '".$WorkstationSerial."', '".$WorkstationMFG."', '".$WorkstationOS."', '".$Active."'";
	$results = mysql_query($newAddition);   //hopefully this is set about about right
	
?>
<?php
	require('CloseConnection.inc');
?>
<table class="banner" width="800" height="75"><tr><td></td></tr></table>
<table width="800" class="tablebackground" >
<tr><td> 
<p><span class="style2">Add Workstation</span></p>
</td></tr>
  <tr> 
    <td > <blockquote class="style3">
        <div align="left">Insert workstation information here.</div>
      </blockquote>
      <form action="" method="post" name="WorkstationAdd" id="WorkstationAdd">
        <div align="left"> <span class="style1">Name: 
          <input name="WorkstationName" type="text" id="WorkstationName" size="110">
          </span> <br>
          <span class="style1">Serial Number: 
          <input name="WorkstationSerial" type="text" id="WorkstationSerial" size="100">
          </span> <br>
          <span class="style1">Manufacturer: 
          <input name="WorkstationMFG" type="text" id="WorkstationMFG" size="101">
          </span> <br>
          <span class="style1">Operating System: 
          <input name="WorkstationOS" type="text" id="WorkstationOS" size="95">
          </span> <br>
          <input name="Active" type="radio" value="Active">
          Active 
          <input name="Inactive" type="radio" value="Inactive">
          Inactive <br>
          <p align="center"> 
            <input name="Submit" type="submit" value="Submit" width="40">
            <input name="Clear" type="reset" id="Clear" value="Clear" width="40">
          </p>
          <p> 
            <input name="ID" type="hidden" id="ID">
          </p>
        </div></p>
        </form></td>
  </tr>
</table>
</body>
</html>
