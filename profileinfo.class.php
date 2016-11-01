<?php
class ProfileInfo {
	
		private $connection;
		
		function __construct($mysqli){
			
			$this->connection=$mysqli;

		}

	function profileEmail() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT email FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileEmail);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileEmail;
			
		}

	}
	
	function profileGender() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT gender FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileGender);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileGender;
			
		}
	}
	
	function profileAge() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT age FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileAge);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileAge;
			
		}
	}
	
	function profileCountry() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT country FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileCountry);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileCountry;
			
		}
	}
	
	function profileCity() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT city FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileCity);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileCity;
			
		}
	}
	
	function profileShoesize() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT shoesize FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileShoesize);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileShoesize;
			
		}
	}
	
	function profileCreated() {
		
		$error="";
		
		$stmt = $this->connection->prepare("SELECT created FROM proov1 WHERE id=?");
	
		echo $this->connection->error;
		
		//asendan kysimargi
		$stmt->bind_param("i", $_SESSION["userId"]);
		
		//maaran vaartused muutujatesse
		$stmt->bind_result($profileCreated);
		
		$stmt->execute();
		
		if($stmt->fetch()){
			
			echo $profileCreated;
			
		}
	}
		
}
?>