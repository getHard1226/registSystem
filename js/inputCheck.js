function inCheck(arg) {
	var name = document.getElementById('uName').value;
	var nameCount = name.length;
	var pwd = document.getElementById('uPwd').value;
	var pwdCount = pwd.length;
	
	if (arg == 'regist') {
		var mail = document.getElementById('uMail').value;
		var mailCount = mail.length;
		if (nameCount > 0 && pwdCount > 0 && mailCount > 0) {
			document.getElementById('login').disabled = false;
		} else {
			document.getElementById('login').disabled = true;
		}
	} else if (arg == 'index') {
		if (nameCount > 0 && pwdCount > 0) {
			document.getElementById('login').disabled = false;
		} else {
			document.getElementById('login').disabled = true;
		}
	}
}
