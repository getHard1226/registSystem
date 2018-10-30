<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>登録チェック</title>
</head>

<body>
<?php
session_start();
$_SESSION['userName'] = $_POST['userName'];
$_SESSION['userPwd'] = $_POST['userPwd'];

$userName = $_POST['userName'];
$userPwd = $_POST['userPwd'];

$userName = htmlspecialchars($userName);
$userPwd = htmlspecialchars($userPwd);

$dsn = 'mysql:host=localhost;dbname=phpkiso;charset=utf8';
$db_user = 'root';
$db_pwd = '';

$dbh = new PDO($dsn, $db_user, $db_pwd);

$sql = 'SELECT count(id) FROM users WHERE userName = ? AND userPassword = ?';
$stmt = $dbh->prepare($sql);

$stmt->bindValue(1, $userName, PDO::PARAM_STR);
$stmt->bindValue(2, $userPwd, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetchColumn();

if ($result > 0) {
	$_SESSION['registFlg'] = '1';
	header("Location:./welcome.php");
	exit;
} else {
	$_SESSION['registFlg'] = '0';
	header("Location:./index.php");
	exit;	
}

?>
</body>
</html>
