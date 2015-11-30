<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		UNSET($_SESSION['user']); 
		header("Location: login.php");
	}




