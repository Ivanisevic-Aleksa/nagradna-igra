<?php
//inc.adminLogin.php
require_once "class.php";
if (isset($_POST["submit"])) {
	$classObject = new Login();
	$classObject->adminLogin($_POST["email"],$_POST["password"]);
}
else{
	echo "<script>
			alert('Doslo je do greske....');
			window.location.href = '../login.php?greska';
		  </script>";
}