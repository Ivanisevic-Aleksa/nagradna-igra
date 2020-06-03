/*loginFormVal.js*/
function loginFormValidation(){

	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	var errorEmail = document.getElementById("errorEmail");
	var errorPassword = document.getElementById("errorPassword");

	var regexEmail = /^[a-z,A-Z,0-9,_,.]+[@][a-z,A-Z]+[.][a-z,A-Z,.]{2,6}$/g;
	var regexPassword = /^[a-z,A-Z,0-9]+$/g;

	var resultEmail = regexEmail.test(email);
	var resultPassword = regexPassword.test(password);

	var resultSum = 0;

	if (resultEmail == false) {
		errorEmail.innerHTML = "Prazno polje ili email nepostojeceg formata....";
		document.getElementById("email").style.border = "solid 2px red";
	}
	else{
		errorEmail.innerHTML = "";
		document.getElementById("email").style.border = "solid 2px green";
		resultSum++;
	}

	if (resultPassword == false) {
		errorPassword.innerHTML = "Prazno polje ili sadrzi nevalidne karaktere....";
		document.getElementById("password").style.border = "solid 2px red";
	}
	else if (password.length > 40) {
		errorPassword.innerHTML = "Lozinka mora biti kraca od 40 karaktera!";
		document.getElementById("password").style.border = "solid 2px red";
	}
	else{
		errorPassword.innerHTML = "";
		document.getElementById("password").style.border = "solid 2px green";
		resultSum++;
	}

	if (resultSum === 2) {
		return true;
	}
	else {
		return false;
	}
}