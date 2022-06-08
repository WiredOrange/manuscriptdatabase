<?php

if(isset($_POST["submit"])) {

	$fn = $_POST["FirstName"];
	$ln = $_POST["LastName"];
	$email = $_POST["Email"];
	$pwd = $_POST["Password"];
	$pwdRepeat = $_POST["RepeatPassword"];
	$admin = $_POST["Administrator"];
	if($admin == NULL) {
		$admin = false;
	}
	if(isset($_POST["edit"])) {
		$id = $_POST["edit"];
	}

	require_once 'config.php';
	require_once 'functions.php';

	if(isset($_POST["edit"])) {
		if(pwdMatch($pwd, $pwdRepeat) !== false) {
			header("location: ../profile.php?user=".$id."&error=pwdnomatch");
			exit();
		}
		editUser($conn, $id, $fn, $ln, $email, $pwd, $admin);
	} else {
		if(pwdMatch($pwd, $pwdRepeat) !== false) {
			header("location: ../profile.php?error=pwdnomatch");
			exit();
		}
		else if(emailExists($conn, $email) !== false) {
			header("location: ../profile.php?error=emailexists");
			exit();
		}
		createUser($conn, $fn, $ln, $email, $pwd, $admin);
	}

} else {
	header("location: ../index.php");
}
