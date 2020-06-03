<?php
echo "<div class='admin-card'>";
if (isset($_SESSION["loged"])) {
	echo "<p id='wb'>Dobro dosao nazad ".$_SESSION["adminID"]."</p>";

	/*Prikaz ukupno prijavljenih tamicara*/
	require_once "php/inc.getCompetitors.php";


	/*Dugme koje nakon pritiska izvaci nasumicno odabran id iz baze
		i prikazuje ga kao pobednika nagradne igre*/
	echo "<div class='admin-submit'>";
	echo "<form method='POST' action='index.php?admin_prijavljen_pobednik'>";
	echo "<button type='submit' name='submit'>Prikazi pobednika</button>";
	echo "</form>";
	echo "</div>";

	

	/*Prikaz pobednika nagradne igre*/
	if (isset($_POST["submit"])) {
		require_once "php/inc.getWinner.php";
	}
	

	
	/*Odjavi se dugme*/
	echo "<div class='logout'>";
	echo "<a href='php/logout.php'><button>Odjavi se</button></a>";
	echo "</div>";
}
else{
	echo "<script>
			alert('Da bi ste pristupili ovoj stranici morate se prijaviti prvo!');
			window.location.href = '../login.php?greska';
		  </script>";
}
echo "</div>";