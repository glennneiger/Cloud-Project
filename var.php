<?php
	include('session.php');
	$varRes = null;
	$varMet = null;
	if(isset($_POST['submit2'])){
		global $varRes;
		$varResource = $_POST['res'];
	    $_SESSION['varRes'] = $varResource;
	    echo $varRes;
	}
	if(isset($_POST['submit3'])){
		global $varMet;
		$varMeter = $_POST['met'];
		$_SESSION['varMet'] = $varMeter;
		
		header('Location: chart.php');
		exit;
	}

	
?>
