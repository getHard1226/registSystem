<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>ようこそ</title>
</head>

<body>
<?php
	$uName = $_POST['userName'];
	$uPwd = $_POST['userPwd'];
	echo 'ようこそ' .$uName. '様</br>';
?>
</body>
</html>
