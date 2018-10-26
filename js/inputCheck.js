var nameFlg = false;
var pwdFlg = false;

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

function judge() {
	if (nameFlg && pwdFlg) {
		document.getElementById('login').disabled = false;
	} else {
		document.getElementById('login').disabled = true;
	}
}
