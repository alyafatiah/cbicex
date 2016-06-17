
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include("../dbconn.php");
if(isset($_POST['btn-login2']))
{

	/* capture values from HTML form */
	$organizer_id = $_POST['organizer_id'];
	$organizer_password = $_POST['organizer_password'];
	//$enc = base64_encode ($bidder_password);
	//$dec = base64_decode ($enc);
	
	if($organizer_id == "admin" && $organizer_password == "admin")
	{
		$_SESSION['admin'] = "Admin";
		header("Location: /cbicex/admin/homeadmin.php");
	}
	else{
		?>
			<script>alert('Invalid id or password \nPlease try again!');
			window.location.href='adminlogin.php';</script>
			<?php
				//echo $sql;
				/*$message = "WRONG E-MAIL OR PASSWORD.";
				echo "<script type='text/javascript'> alert('$message');";
				echo "window.location.href='login.php'; ";
				echo "</script>";	*/
			} 
}

mysql_close($dbconn);
?>

</body>
</html>