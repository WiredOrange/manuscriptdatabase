<?php

if(isset($_POST["submit"])) {

	$id = $_POST["record"];

	require_once 'config.php';
	require_once 'functions.php';

	deleteRecord($conn, $id);

} else {
	header("location: ../index.php");
}
