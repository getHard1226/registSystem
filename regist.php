<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>登録</title>
	<script type = "text/javascript" src = "js/inputCheck.js"></script>
</head>

<body>
<?php
	echo '<table>';
		echo '<tr>';
			echo '<td>ユーザ名 :</td>';
			echo '<td>';
				echo '<input type = "text" name = "userName" id = "uName" onchange = "nCheck()">';
			echo'</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>パスワード :</td>';
			echo '<td>';
				echo '<input type = "text" name = "userPwd" id = "uPwd" onchange = "pCheck()">';
			echo '</td>';
		echo '</tr>';

		echo '<tr>';
			echo '<td>メールアドレス</td>';
			echo '<td>';
				echo '<input type = "text" name = "userMail" id = "uMail" onchange = "mCheck(\'regist\')">';
			echo '</td>';
		echo '</tr>';
	echo '</table>';
	echo '<input type = "button" id = "login" value = "登録" disabled>';
?>
</body>
</html>
