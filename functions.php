<?php
	
	require("/home/georvalg/config.php");
	
	$database="if16_georg";
	$mysqli=new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	session_start();
	
	require("../class/user.class.php");
	$User=new User($mysqli);
	
	require("../class/interest.class.php");
	$Interest=new Interest($mysqli);
	
	require("../class/sneakers.class.php");
	$Sneakers=new Sneakers($mysqli);
	
	require("../class/profileinfo.class.php");
	$ProfileInfo=new ProfileInfo($mysqli);
	
	require("../class/helper.class.php");
	$Helper=new Helper($mysqli);
		
?>

