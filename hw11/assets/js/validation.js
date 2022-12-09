// JavaScript Document
function checkName(nameValue, id) {
	var pattern=/[a-zA-Z]+$/;
	var msg;
	var returnValue = true;
	
	if (nameValue.match(pattern)) {		
		msg='Name is valid';
		turnGreen(id);
		returnValue = true;
	}
	else {
		msg='Invalid data entered';
		turnRed(id);
		returnValue = false;
	}
	document.getElementById(id+'Help').innerHTML=msg;
	return returnValue;
}

function checkEmail(emailValue, id) {
	var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	var returnValue;
	
	if (emailValue.match(pattern)) {
		msg='Email address is valid';
		turnGreen(id);
		returnValue = true;
	}
	else {
		msg='Invalid email address.';
		turnRed(id);
		returnValue = false;
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
	return returnValue;
}

function checkUsername(usernameValue, id){
	var pattern = /[a-zA-Z0-9]{8,}[^!@#$%^&*]*$/;
	var msg;
	var returnValue;
	
	if (usernameValue.match(pattern)) {
		msg = 'Username is valid';
		turnGreen(id);
		returnValue = true;
	}
	else {
		msg = 'Invalid username';
		turnRed(id);
		returnValue = false;
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
	return returnValue;
}

function checkComments(commentsValue, id) {
	var pattern = /^[^!@#$%^&*][^!@#$%^&*]+$/;
	var msg;
	var returnValue;
	
	if (commentsValue.match(pattern)) {
		msg = 'Comment is valid';
		turnGreen(id);
		returnValue = true;
	}
	else {
		msg = 'Invalid comment';
		turnRed(id);
		returnValue = false;
	}
	
	document.getElementById(id+'Help').innerHTML=msg;
	return returnValue;
}

function onSubmit() {
	var fname = checkName(document.getElementById('fname').value, 'fname');
	var lname = checkName(document.getElementById('lname').value, 'lname');
	var email = checkEmail(document.getElementById('email').value, 'email');
	
	if (fname == false || lname == false|| email == false){
		alert("Please make sure all the information entered is valid.");
//		window.history.back();
		return false;
	}
}

function turnGreen(id) {
	document.getElementById(id).style.borderColor = "#01ff00";
	document.getElementById(id).style.borderWidth = "medium";
}

function turnRed(id) {
	document.getElementById(id).style.borderColor = "red";
	document.getElementById(id).style.borderWidth = "medium";
}