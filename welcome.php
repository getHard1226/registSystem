<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "UTF-8">
	<title>ようこそ</title>
</head>

<body>
<?php
	session_start();
	$uName = $_SESSION['userName'];
	echo 'ようこそ' .$uName. '様</br>';
?>
</body>
</html>
