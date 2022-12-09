// JavaScript Document

function calcFunc() {
	var num1 = parseInt(document.getElementById('number1').value);
	var num2 = parseInt(document.getElementById('number2').value);
	var numAns;
	var operation = document.getElementById('operation').value;

	switch(operation){		
		case "add":
			numAns=num1+num2;
			document.getElementById('output').innerHTML="Result = " + numAns;
			break;
		case "subtract":
			numAns=num1-num2;
			document.getElementById('output').innerHTML="Result = " + numAns;
			break;
		case "multiply":
			numAns=num1*num2;
			document.getElementById('output').innerHTML="Result = " + numAns;
			break;
		case "divide":
			numAns=num1/num2;
			document.getElementById('output').innerHTML="Result = " + numAns;
			break;
		default:
			document.getElementById('output').innerHTML="Please choose an operation.";
	}
}

function clearInput(){
	document.getElementById("number1").value = "";
	document.getElementById("number2").value= "";
	document.getElementById("output").innerHTML= "";
	document.getElementById("operation").value="";
	
//	document.getElementsByClassName('form-control').value = '';
}
