<?php
$host = "test-db.cjma68i2qcpj.ap-southeast-2.rds.amazonaws.com";
$user = "admin";
$password = "dummy";
$dbname = "testdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
	die("接続失敗");
}

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
	header("Location: dbtest.php");
	exit;
} else {
	echo "削除失敗";
}

$conn->close();
?>
