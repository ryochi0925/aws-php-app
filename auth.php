<?php
session_start();

$host = "test-db.cjma68i2qcpj.ap-southeast-2.rds.amazonaws.com";
$user = "admin";
$password = "dummy";
$dbname = "testdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
	die("接続失敗");
}

$username = $_POST["username"];
$password_input = $_POST["password"];

$sql = "SELECT * FROM accounts WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();

	if (password_verify($password_input, $row["password"])) {
		$_SESSION["username"] = $username;
		header("Location: dbtest.php");
		exit;
	} else {
		echo "ログイン失敗";
	}
} else {
	echo "ログイン失敗";
}

$conn->close();
?>
