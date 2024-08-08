<?php
// session_start();
include('../include/connection.php');
// include "header.php";
?>

<?php session_start();
	// include "connect.php";
	$aid = $_POST['aid'];
	$pass = $_POST['pass'];

	$sql = mysqli_query($con,"select * from aadmin where adminid='$aid' and password='$pass'");
	if(mysqli_fetch_array($sql))
	{
		$_SESSION['aid'] = $aid;
		header("location:wel_add.php");
	}
	else
	{
		echo "<center><span style='color:red; font-size:2.3em; font-weight:bold;'>Please Enter Valid AdminID and Password</span></center>";
		include "index.php";
	}
?>