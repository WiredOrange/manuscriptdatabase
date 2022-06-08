<?php

if(isset($_POST["submit"])) {

	$id = $_POST["user"];

	require_once 'config.php';
	require_once 'functions.php';

	deleteUser($conn, $id);

} else {
	header("location: ../index.php");
}
