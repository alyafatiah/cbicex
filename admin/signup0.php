<?php
session_start();
include("../dbconn.php");

if(isset($_POST['btn-signup']))
{
 $eventname = mysql_real_escape_string($_POST['eventname']);
 $eventdate = mysql_real_escape_string($_POST['eventdate']);
 $venue = mysql_real_escape_string($_POST['venue']);
 
 $sql = "INSERT INTO event
		(eventname, eventdate, venue)
		VALUES('".$eventname."', '".$eventdate."',
		'".$venue."')";

	mysql_query($sql) or die (mysql_error());
	if($sql)
 {	
  ?>
        <script>alert('You have successfully registered! Login to proceed');
		window.location.href='index.php';</script>
        <?php
 }
 else
 {
  ?>
         <script>alert('Oops! There is an error registering you.');</script> 
        <?php
 }
 mysql_close($dbconn);
}
?>