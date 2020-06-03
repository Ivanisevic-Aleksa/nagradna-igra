<?php
//inc.insertDataToDB.php
require_once "class.php";
if (isset($_POST["submit"])) {
	$classObject = new InsertData();
	$classObject->insert($_POST["username"],$_POST["email"]);
}
else{
	echo "<script>
			alert('Doslo je do greske....');
			window.location.href = '../index.php?greska';
		  </script>";
}