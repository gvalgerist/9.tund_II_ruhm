<?php
	//edit.php
	require("../functions.php");
	require("../editFunctions.php");
	
	

	
	//kas kasutaja uuendab andmeid
	if(isset($_POST["update"])){
		
		updatesneaker($Helper->cleanInput($_POST["contactemail"]), $Helper->cleanInput($_POST["description"]), $Helper->cleanInput($_POST["price"]));
		
		header("Location: edit.php?contactemail=".$_POST["contactemail"]."&success=true");
        exit();	
		
	}
	
	//saadan kaasa id
	$c = getSingleSneakerData($_GET["contactemail"]);
	var_dump($c);
	
?>
<?php require("../header.php"); ?>
<br><br>
<a href="data.php"> tagasi </a>

<h2>Muuda kirjet</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<input type="hidden" name="contactemail" value="<?=$_GET["contactemail"];?>" > 
  	<label for="description" >Description</label><br>
	<input id="description" name="description" type="text" value="<?php echo $c->description;?>" ><br><br>
  	<label for="price" >Price</label><br>
	<input id="price" name="price" type="text" value="<?=$c->price;?>"><br><br>
  	
	<input type="submit" name="update" value="Save">
  </form>
  <?php require("../footer.php"); ?>