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

$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<body>
<h1>ユーザー編集</h1>

<form action="update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
名前: <input type="text" name="name" value="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>">
<input type="submit" value="更新">
</form>

<p><a href="dbtest.php">戻る</a></p>
</body>
</html>
