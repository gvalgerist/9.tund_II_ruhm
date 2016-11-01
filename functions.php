<?php
	
	require("../../config.php");
	
	$database="if16_georg";
	$mysqli=new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	session_start();
	
	require("user.class.php");
	$User=new User($mysqli);
	
	require("interest.class.php");
	$Interest=new Interest($mysqli);
	
	require("sneakers.class.php");
	$Sneakers=new Sneakers($mysqli);
	
	require("profileinfo.class.php");
	$ProfileInfo=new ProfileInfo($mysqli);
	
	require("helper.class.php");
	$Helper=new Helper($mysqli);
		
?>

