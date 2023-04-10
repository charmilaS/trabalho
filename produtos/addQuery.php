<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
	    $cod= $_POST['cod'];
	    $name= $_POST['name'];
		$price = $_POST['price'];
		
		

		$query = mysqli_query($connect,  "INSERT INTO produtos (cod, name, price) VALUES ('$cod', '$name', '$price')");
		

	
		header("location: addMsg.php");
?>