/*indexFormVal.js*/
function indexFormValidation(){
	
	var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;

	var errorUsername = document.getElementById("errorUsername");
	var errorEmail = document.getElementById("errorEmail");

	var regexUsername = /[a-z,A-Z]+$/g;
	var regexEmail = /^[a-z,A-Z,0-9,_,.]+[@][a-z,A-Z]+[.][a-z,A-Z,.]{2,6}$/g;

	var resultUsername = regexUsername.test(username);
	var resultEmail = regexEmail.test(email);

	var resultSum = 0;

	if (resultUsername == false) {
		errorUsername.innerHTML = "Izgleda da je polje prazno ili sadrzi nevalidne karaktere....";
		document.getElementById("username").style.border = "solid 2px red";
	}
	else if (username.length > 40) {
		errorUsername.innerHTML = "Ime i Prezime mora biti krace od 40 karaktera!";
		document.getElementById("username").style.border = "solid 2px red";
	}
	else{
		errorUsername.innerHTML = "";
		document.getElementById("username").style.border = "solid 2px green";
		resultSum++;
	}

	if (resultEmail == false) {
		errorEmail.innerHTML = "Izgleda da je polje prazno ili je email nepostojeceg formata....";
		document.getElementById("email").style.border = "solid 2px red";
	}
	else{
		errorEmail.innerHTML = "";
		document.getElementById("email").style.border = "solid 2px green";
		resultSum++;
	}

	if (resultSum === 2) {
		return true;
	}
	else{
		return false;
	}
}