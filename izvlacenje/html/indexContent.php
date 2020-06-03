<!-- Background-card -->
	<div class="background-card">

		<div class="title">
			<h1>Prijavi se i osvoji Sony 4</h1>
		</div>

		<div class="price">
			<img src="img/ps4.jpg" alt="Slika nagrade">
		</div>

		<div class="about">
			<h2>O nama</h2>
		</div>

		<div class="about-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a mi eros. Sed iaculis dolor metus, a feugiat nunc porta vitae. Aenean rutrum dignissim nibh, at condimentum erat feugiat sit amet. Cras vitae condimentum diam. Aenean in iaculis leo. Phasellus sodales eget leo et rutrum. Vestibulum quis velit ipsum. Vestibulum dictum nisl ut felis auctor, at feugiat enim scelerisque. Sed sodales turpis in justo venenatis consectetur. In in tortor nibh. Nullam tellus elit, vehicula nec diam sit amet, tincidunt sodales mauris.</p>
		</div>

		<div class="instagram-link">
			<a href="#">Zaprtite nas na instagramu</a>
		</div>

		<div class="must">
			<h3>Napomena</h3>
		</div>

		<div class="must-text">
			<p>Prijava traje do 20.06.2020, svi koji se prijave nakon tog datuma nece ucestvovati u izvlacenju</p>
		</div>

		<div class="live">
			<h4>Izvlacenje ce se odrzati 25.06.2020, izvlacenje mozete gledati uzivo preko naseg <a href="#">instagram naloga</a></h4>
		</div>

		<div class="form-head">
			<p>Popunite prijavu</p>
		</div>
		<div class="form-content">
			<form method="POST" action="php/inc.insertDataToDB.php" onsubmit="return indexFormValidation()">
				<div class="ff1">
					<span id="errorUsername"></span>
					<label for="username">Ime i Prezime</label>
					<input type="text" name="username" id="username" placeholder="Petar Petrovic...."
						autocomplete="off">
				</div>
				<div class="ff2">
					<span id="errorEmail"></span>
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" placeholder="petar.petrovic@gmail.com...."
						autocomplete="off">
				</div>
				<div class="ff3">
					<button type="submit" name="submit">Prijavi se</button>
				</div>
			</form>
		</div>
	</div>
	<!-- Footer -->
	<div class="footer">
		<p>Prijavite se i osvojite Sony 4, 2020</p>
	</div>