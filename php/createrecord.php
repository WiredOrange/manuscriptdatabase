<?php

if(isset($_POST["submit"])) {

	$author = $_POST["author"];
	$recipient = $_POST["recipient"];
	$date = $_POST["date"];
	$description = $_POST["description"];
	$notes = $_POST["notes"];
	if(isset($_POST["edit"])) {
		$id = $_POST["edit"];
	}

	require_once 'config.php';
	require_once 'functions.php';

	if(isset($_POST["edit"])) {
		editRecord($conn, $id, $author, $recipient, $date, $description, $notes);
	} else {
		createRecord($conn, $author, $recipient, $date, $description, $notes);
	}

} else {
	header("location: ../index.php");
}
