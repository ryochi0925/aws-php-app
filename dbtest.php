<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
?>
<?php
$host = "test-db.cjma68i2qcpj.ap-southeast-2.rds.amazonaws.com";
$user = "admin";
$password = "dummy";
$dbname = "testdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
	die("接続失敗");
}

$result = $conn->query("SELECT * FROM users ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<body>
<h1>ユーザー一覧</h1>

<?php while ($row = $result->fetch_assoc()): ?>
<?php echo $row["id"]; ?> :
<?php echo htmlspecialchars($row["name"], ENT_QUOTES, 'UTF-8'); ?>
<a href="edit.php?id=<?php echo $row['id']; ?>">編集</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">削除</a>
<br>
<?php endwhile; ?>

<p><a href="index.php">戻る</a></p>
</body>
</html>
