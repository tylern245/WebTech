// JavaScript Document
function checkName(nameValue, id) {
	var pattern=/[a-zA-Z]+$/;
	var msg;
	
	if (nameValue.match(pattern)) {		
		msg='Name is valid';
		turnGreen(id);
	}
	else {
		msg='Invalid data entered';
		turnRed(id);
	}
	document.getElementById(id+'Help').innerHTML=msg;
}

function checkEmail(emailValue, id) {
	var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	
	if (emailValue.match(pattern)) {
		msg='Email address is valid';
		turnGreen(id);
	}
	else {
		msg='Invalid email address.';
		turnRed(id);
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
}

function checkUsername(usernameValue, id){
	var pattern = /[a-zA-Z0-9]{8,}[^!@#$%^&*]*$/;
	var msg;
	if (usernameValue.match(pattern)) {
		msg = 'Username is valid';
		turnGreen(id);
	}
	else {
		msg = 'Invalid username';
		turnRed(id);
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
}

function checkComments(commentsValue, id) {
	var pattern = /^[^!@#$%^&*][^!@#$%^&*]+$/;
	var msg;
	if (commentsValue.match(pattern)) {
		msg = 'Comment is valid';
		turnGreen(id);
	}
	else {
		msg = 'Invalid comment';
		turnRed(id);
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
}

function turnGreen(id) {
	document.getElementById(id).style.borderColor = "#01ff00";
	document.getElementById(id).style.borderWidth = "medium";
}

function turnRed(id) {
	document.getElementById(id).style.borderColor = "red";
	document.getElementById(id).style.borderWidth = "medium";
}