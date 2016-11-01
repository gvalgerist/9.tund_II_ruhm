<?php
class User {
	
		private $connection;
		
		function __construct($mysqli){
			
			$this->connection=$mysqli;
			
		}

	function signUp ($email, $password, $gender, $signupAge, $signupCountry, $signupCity, $signupShoesize) {
		
		$stmt = $this->connection->prepare("INSERT INTO proov1(email, password, gender, age, country, city, shoesize) VALUES(?, ?, ?, ?, ?, ?, ?)");
	
		echo $this->connection->error;
		
		$stmt->bind_param("sssssss", $email, $password, $gender, $signupAge, $signupCountry, $signupCity, $signupShoesize);
		
		if($stmt->execute()) {
			
			echo "salvestamine onnestus";
			
		} else {
			
			echo "ERROR".$stmt->error;
		}
		
		$stmt->close();
		$this->connection->close();
		
	}

	function login($email, $password) {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT id, email, password, created FROM proov1 WHERE email=?");
	
		echo $this->connection->error;
		
		
		//asendan kysimargi
		$stmt->bind_param("s", $email);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($id, $emailFromDb,$passwordFromDb, $created);
		
		$stmt->execute();
		
		//kas andmed tulid v mitte
		if($stmt->fetch()){
			
			//oli selline meil
			$hash=hash("sha512", $password);
			if($hash==$passwordFromDb){
				
				echo"Kasutaja logis sisse ".$id;
				
				$_SESSION["userId"]=$id;
				$_SESSION["userEmail"]=$emailFromDb;
				
				header("Location: data.php");
				exit();
				
			}else {
				$error="Vale parool";
			}
			
			
		}else{
			
			//ei olnud seda meili
			$error="Ei ole sellist emaili";
			
		}
		
		return $error;
	
	}
	
}
?>