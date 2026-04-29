<!DOCTYPE html>
<html>
<body>
<h1>ログイン</h1>

<?php
if (isset($_GET["error"])) {
        if ($_GET["error"] === "username_required") {
                echo "<p>ユーザー名を入力してください</p>";
        } elseif ($_GET["error"] === "password_required") {
                echo "<p>パスワードを入力してください</p>";
        } elseif ($_GET["error"] === "login_failed") {
                echo "<p>ユーザー名またはパスワードが正しくありません</p>";
        }
}
?>


<form action="auth.php" method="post">
ユーザー名: <input type="text" name="username"><br>
パスワード: <input type="password" name="password"><br>
<input type="submit" value="ログイン">
</form>

</body>
</html>

