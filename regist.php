<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>登録</title>
	<script type = "text/javascript" src = "js/inputCheck.js"></script>
</head>

<body>
<?php
	
	echo '<form action = "registCheck.php" method = "POST">';
		echo '<table>';
			echo '<tr>';
				echo '<td>ユーザ名 :</td>';
				echo '<td>';
					echo '<input type = "text" name = "userName" id = "uName" onblur = "inCheck(\'regist\')">';
				echo'</td>';
			echo '</tr>';

			echo '<tr>';
				echo '<td>パスワード :</td>';
				echo '<td>';
					echo '<input type = "text" name = "userPwd" id = "uPwd" onblur = "inCheck(\'regist\')">';
				echo '</td>';
			echo '</tr>';

			echo '<tr>';
				echo '<td>メールアドレス</td>';
				echo '<td>';
					echo '<input type = "text" name = "userMail" id = "uMail" onblur = "inCheck(\'regist\')">';
				echo '</td>';
			echo '</tr>';
		echo '</table>';
		echo '<input type = "submit" id = "login" value = "登録" disabled>';
	echo '</form>';
?>
</body>
</html>
