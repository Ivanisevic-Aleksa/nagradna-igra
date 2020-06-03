<?php
//class.php
require_once "db.php";

class InsertData extends DB{
	public function insert($username,$email){
		$trimUsername = trim($username);
		$trimEmail = trim($email);

		$escUsername = mysqli_real_escape_string($this->connectDB(),$trimUsername);
		$escEmail = mysqli_real_escape_string($this->connectDB(),$trimEmail);

		$selectSQL = "SELECT * FROM competitor WHERE email = '".$escEmail."' LIMIT 1";
		$selectResult = $this->connectDB()->query($selectSQL);

		if (!$selectResult) {
			echo "<script>
					alert('Doslo je do greske....');
					window.location.href = '../index.php?greska';
				  </script>";
		}
		else{
			if (mysqli_num_rows($selectResult) == 1) {
				echo "<script>
						alert('E-mail vec iskoriscen....');
						window.location.href = '../index.php?email_iskoriscen';
					  </script>";
			}
			else{
				$insertSQL = "INSERT INTO competitor(username,email,created_at)
							VALUES('$escUsername','$escEmail',now())";
				$insertResult = $this->connectDB()->query($insertSQL);
				if (!$insertResult) {
					echo "<script>
							alert('Doslo je do greske....');
							window.location.href = '../index.php?greska';
					  	  </script>";
				}
				else{
					echo "<script>
							alert('Uspesno ste se prijavili!');
							window.location.href = '../index.php?uspesna_prijava';
					  	  </script>";
				}
			}
		}		
	}
}

class Login extends DB{
	public function adminLogin($email,$password){
		$trimEmail = trim($email);
		$trimPassword = trim($password);

		$escEmail = mysqli_real_escape_string($this->connectDB(),$trimEmail);
		$escPassword = mysqli_real_escape_string($this->connectDB(),$trimPassword);

		$loginSql = "SELECT * FROM admin WHERE email = '".$escEmail."' LIMIT 1";
		$loginSqlResult = $this->connectDB()->query($loginSql);

		if (!$loginSqlResult) {
			echo "<script>
					alert('Doslo je do greske....');
					window.location.href = '../login.php?greska';
				  </script>";
		}
		else{
			if (!mysqli_num_rows($loginSqlResult) == 1) {
				echo "<script>
						alert('Doslo je do greske....');
						window.location.href = '../login.php?greska';
				  	  </script>";
			}
			else{
				if (!$row = mysqli_fetch_assoc($loginSqlResult)) {
					echo "<script>
							alert('Doslo je do greske....');
							window.location.href = '../login.php?greska';
				  	  	  </script>";
				}
				else{
					$passwordCheck = password_verify($escPassword, $row["password"]);
					if ($passwordCheck == false) {
						echo "<script>
								alert('Netacna lozinka, pokusajte ponovo!');
								window.location.href = '../login.php?netacna_lozinka';
				  	  	  	  </script>";
					}
					else{
						session_start();
						$_SESSION["loged"] = "Prijavljen";
						$_SESSION["adminID"] = "$escEmail";
						header("location:../index.php?admin_prijavljen");
						exit();
					}
				}
			}
		}
	}
}

class GetData extends DB{
	public function numOfCompetitor(){
		$sumCompetitor = "SELECT COUNT(id) AS id FROM competitor";
		$sumCompetitorResult = $this->connectDB()->query($sumCompetitor);

		if (!mysqli_num_rows($sumCompetitorResult) == 1) {
			echo "<p>Trenutno nema prijavljenih takmicara</p>";
		}
		else{
			while ($row = mysqli_fetch_assoc($sumCompetitorResult)) {
				echo "<p>Trenutno ima ".$row["id"]." prijavljenih takmicara</p>";
			}
		}
	}

	public function winner(){
		$winnerSQL = "SELECT * FROM competitor WHERE created_at <= DATE(20200610) ORDER BY RAND(id) LIMIT 1";
		$winnerSQLResult = $this->connectDB()->query($winnerSQL);

		if (!mysqli_num_rows($winnerSQLResult) == 1) {
			echo "<p id='we'>Doslo je do greske</p>";
		}
		else{
			while ($row = mysqli_fetch_assoc($winnerSQLResult)) {
				echo "<h4 id='w-title'>Pobednik je</h4>";
				echo "<p id='w-username'>Ime i Prezime: ".$row["username"]."</p>";
				echo "<p id='w-email'>E-mail: ".$row["email"]."</p>";
				echo "<p id='w-date'>Prijavio se: ".$row["created_at"]."(godina, mesec, dan)</p>";
			}
		}
	}
}