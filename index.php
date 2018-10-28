<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>糞システム</title>
	<script type = "text/javascript" src = "js/inputCheck.js"></script>
</head>

<body>
<?php
	echo '<form action = "check.php" method = "POST">';
	echo '<table id = "input">';
		echo '<tr>';
			echo '<td>ユーザ名 : </td>';
			echo '<td>';
				echo '<input type = "text" name = "userName" id = "uName" onchange = "nCheck()">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>パスワード : </td>';
			echo '<td>';
				echo '<input type = "texe" name = "userPwd" id = "uPwd" onchange = "pCheck()">';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	echo '<input type = "submit" value = "ログイン" id = "login" disabled>';
	echo '</form>';
	echo '<a href = "regist.php">登録する</a>';
?>
</body>
</html>
