<?php
//db.php
class DB{
	private $hostType = "localhost";
	private $hostUsername = "root";
	private $hostPassword = "";
	private $hostName = "izvlacenje";
	private $conn;

	protected function connectDB(){
		$this->conn = new mysqli($this->hostType,$this->hostUsername,$this->hostPassword,$this->hostName);
		if (!$this->conn) {
			die("Konekcija sa bazom nije uspela....");
		}
		else{
			return $this->conn;
		}
	}
}