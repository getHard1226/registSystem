<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>糞システム</title>
	<script type = "text/javascript" src = "js/inputCheck.js"></script>
</head>

<body>
<?php
	session_start();
	if (isset($_SESSION['registFlg'])) {
		if ($_SESSION['registFlg'] == '0') {
			echo '登録されていません。';
		}	
	}
	echo '<form action = "check.php" method = "POST">';
	echo '<table id = "input">';
		echo '<tr>';
			echo '<td>ユーザ名 : </td>';
			echo '<td>';
				echo '<input type = "text" name = "userName" id = "uName" onblur = "inCheck(\'index\')">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>パスワード : </td>';
			echo '<td>';
				echo '<input type = "texe" name = "userPwd" id = "uPwd" onblur = "inCheck(\'index\')">';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	echo '<input type = "submit" value = "ログイン" id = "login" disabled>';
	echo '</form>';
	echo '<a href = "regist.php">登録する</a>';
?>
</body>
</html>
