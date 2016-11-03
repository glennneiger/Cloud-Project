<?php
	include('config.php');
	session_start();
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($db,"select * from Users where UserId = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['UserId'];
	if(!isset($user_check)){
		header("location:index.php");
	}
?>

