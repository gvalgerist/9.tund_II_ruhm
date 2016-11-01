<?php
class Sneakers {
	
		private $connection;
		
		function __construct($mysqli){
			
			$this->connection=$mysqli;

		}

	function savesneaker ($contactemail, $description, $price) {
		
		$stmt = $this->connection->prepare("INSERT INTO sneakers(user, contactemail, description, price) VALUES(?, ?, ?, ?)");
	
		echo $this->connection->error;
		
		$stmt->bind_param("ssss", $_SESSION["userEmail"], $contactemail, $description, $price);
		
		if($stmt->execute()) {
			
			echo "salvestamine onnestus";
			
		} else {
			
			echo "ERROR".$stmt->error;
		}
		
		$stmt->close();
		
	}
	
	function getallsneakers() {
		
		$stmt=$this->connection->prepare("
			SELECT contactemail, description, price
			FROM sneakers
		");
		
		$stmt->bind_result($contactemail, $description, $price);
		$stmt->execute();
		
		$result=array();
		
		while($stmt->fetch()) {
			
			$sneaker= new stdclass();
			
			$sneaker->contactemail=$contactemail;
			$sneaker->description=$description;
			$sneaker->price=$price;
			
			array_push($result, $sneaker);
		}
		
		$stmt->close();
		
		return $result;
	}
	
	function getallusersneakers() {
		
		$stmt=$this->connection->prepare("
			SELECT contactemail, description, price FROM sneakers WHERE user=?");
		
		$stmt->bind_param("s", $_SESSION["userEmail"]);
		$stmt->bind_result($contactemail, $description, $price);
		$stmt->execute();
		
		$result=array();
		
		while($stmt->fetch()) {
			
			$sneaker= new stdclass();
			
			$sneaker->contactemail=$contactemail;
			$sneaker->description=$description;
			$sneaker->price=$price;
			
			array_push($result, $sneaker);
		}
		
		$stmt->close();
		
		return $result;
	}
		
}
?>