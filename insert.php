<?php
$host = "test-db.cjma68i2qcpj.ap-southeast-2.rds.amazonaws.com";
$user = "admin";
$password = "dummy";
$dbname = "testdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
	die("DB接続失敗");
}

$name = $_POST["name"];

$sql = "INSERT INTO users (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
	echo "登録完了<br>";
	echo "<a href='dbtest.php'>一覧を見る</a>";
} else {
	echo "登録失敗";
}

$conn->close();
?>
