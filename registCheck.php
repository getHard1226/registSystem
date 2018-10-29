<!DOCTYPE html>
<html lang = "ja">
<head>
</head>

<body>

<?php
	$userName = $_POST['userName'];
	$userPwd = $_POST['userPwd'];
	$userMail = $_POST['userMail'];
	
	$dsn = 'mysql:host=localhost;dbname=phpkiso;charset=utf8';
	$user = 'root';
	$pwd = '';
	
	$dbh = new PDO($dsn, $user, $pwd);

	$sql = 'SELECT count(id) FROM users where userName = ? and userPassword = ?';
	$stmt = $dbh->prepare($sql);

	$stmt->bindValue(1, $userName, PDO::PARAM_STR);
	$stmt->bindValue(2, $userPwd, PDO::PARAM_STR);
	$stmt->execute();

	$result = $stmt->fetchColumn();

	if($result > 0) {
		header("Location:./regist.php");
		exit;
	}

	$sql = 'Insert into users (userName, userPassword, userMail) VALUES (?,?,?)';
	$stmt = $dbh->prepare($sql);

	$stmt->bindValue(1, $userName, PDO::PARAM_STR);
	$stmt->bindValue(2, $userPwd, PDO::PARAM_STR);
	$stmt->bindValue(3, $userMail, PDO::PARAM_STR);

	$stmt->execute();

	echo '<p>登録完了いたしました。</p>';
	echo '<table>';
		echo '<tr>';
			echo '<td>ユーザ名 :</td>';
			echo "<td> $userName </td>";
		echo '</tr>';

		echo '<tr>';
			echo '<td>パスワード :</td>';
			echo "<td> $userPwd </td>";
		echo '</tr>';

		echo '<tr>';
			echo '<td>メールアドレス :</td>';
			echo "<td> $userMail </td>";
		echo '</tr>';
?>
</body>
</html>
