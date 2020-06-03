<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<title>Izvlacenje-Login</title>
</head>
<body>
	<div class="login-card">
		<h1>Prijava</h1>
		<form method="POST" action="php/inc.adminLogin.php" onsubmit="return loginFormValidation()">
			<div class="lc1">
				<span id="errorEmail"></span>
				<label for="email">E-mail</label>
				<input type="text" name="email" id="email" placeholder="admin@gmail.com...."
					autocomplete="off">
			</div>

			<div class="lc2">
				<span id="errorPassword"></span>
				<label for="password">Lozinka</label>
				<input type="password" name="password" id="password" placeholder="admin...."
					autocomplete="off">
			</div>

			<div class="lc3">
				<button type="submit" name="submit">Prijavi se</button>
			</div>
		</form>
	</div>

<!-- JavaSkript -->
<script src="js/loginFormVal.js"></script>
</body>
</html>