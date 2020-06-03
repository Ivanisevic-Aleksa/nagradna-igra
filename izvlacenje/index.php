<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<title>Izvlacenje</title>
</head>
<body>
	<?php
		if (isset($_SESSION["loged"])) {
			require_once "html/indexAdmin.php";
		}
		else{
			require_once "html/indexContent.php";
		}
	?>
<!-- JavaScript -->
<script src="js/indexFormVal.js"></script>
</body>
</html>