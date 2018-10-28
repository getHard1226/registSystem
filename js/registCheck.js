var nameFlg = false;
var pwdFlg = false;
var mailFlg = false;

function nCheck() {
	var name = document.getElementById('uName').value;
	var nameCount = name.length;
	
	if (nameCount > 0) {
		nameFlg = true;
	} else {
		nameFlg = false;
	}

	judge();
}

function pCheck() {
	var pwd = document.getElementById('uPwd').value;
	var pwdCount = pwd.length;

	if (pwdCount > 0) {
		pwdFlg = true;
	} else {
		pwdFlg = false;
	}

	judge();
}

function mCheck() {
	var mail = document.getElementById('uMail').value;
	var mailCount = mail.length;

	if (mailCount > 0) {
		mailFlg = true;
	} else {
		mailFlg = false;
	}

	judge();
}

function judge() {
	if (nameFlg && pwdFlg && mailFlg) {
		document.getElementById('login').disabled = false;
	} else {
		document.getElementById('login').disabled = true;
	}
}
