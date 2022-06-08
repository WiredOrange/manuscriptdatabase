<?php

function recordVisit($conn, $user_id, $record_id) {
	$sql = "INSERT INTO users_records (user_id, record_id, date_searched) VALUES (?,?,NOW());";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../dashboard.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $user_id, $record_id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
}

function pwdMatch($pwd, $pwdRepeat) {
	$result;
	if($pwd !== $pwdRepeat) {
		$result = true;
	} else {
		$result = false;
	}
	return $result;
}

function emailExists($conn, $email) {
	$sql = "SELECT * FROM users WHERE email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	} else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function createUser($conn, $fn, $ln, $email, $pwd, $admin) {
	$sql = "INSERT INTO users (firstname, lastname, email, pwdhash, admin) VALUES (?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../profile.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sssss", $fn, $ln, $email, $hashedPwd, $admin);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../profile.php?error=none");
	exit();
}

function editUser($conn, $id, $fn, $ln, $email, $pwd, $admin) {
	$sql = "UPDATE users SET firstname=?, lastname=?, email=?, pwdhash=?, admin=? WHERE id=?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../profile.php?user=".$id."&error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssssss", $fn, $ln, $email, $hashedPwd, $admin, $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../profile.php?user=".$id."&error=none");
	exit();
}

function deleteUser($conn, $id) {
	$sql = "DELETE FROM users WHERE id = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../users.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../users.php?error=none");
	exit();
}

function loginUser($conn, $email, $pwd) {
	$userExists = emailExists($conn, $email);

	if($userExists === false) {
		header("location: ../index.php?error=wrongemail");
		exit();
	}

	$pwdHashed = $userExists["pwdhash"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if($checkPwd === false) {
		header("location: ../index.php?error=wrongpassword");
		exit();
	}
	else if ($checkPwd === true) {
		session_start();
		$_SESSION["id"] = $userExists["id"];
		$_SESSION["firstname"] = $userExists["firstname"];
		$_SESSION["lastname"] = $userExists["lastname"];
		$_SESSION["email"] = $userExists["email"];
		$_SESSION["admin"] = $userExists["admin"];
		header("location: ../dashboard.php");
		exit();
	}
}

function createRecord($conn, $author, $recipient, $date, $description, $notes) {
	$sql = "INSERT INTO records (author, recipient, date, description, notes) VALUES (?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../recordform.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "sssss", $author, $recipient, $date, $description, $notes);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../recordform.php?error=none");
	exit();
}

function editRecord($conn, $id, $author, $recipient, $date, $description, $notes) {
	$sql = "UPDATE records SET author=?, recipient=?, date=?, description=?, notes=? WHERE id = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../recordform.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ssssss", $author, $recipient, $date, $description, $notes, $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../record.php?record=".$id."");
	exit();
}

function deleteRecord($conn, $id) {
	$sql = "DELETE FROM records WHERE id = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../recordlist.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "s", $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../recordlist.php?error=none");
	exit();
}
