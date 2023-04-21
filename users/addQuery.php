<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		$query = mysqli_query($connect,  "INSERT INTO users (name, contact, email, username, password) VALUES ('$name', '$contact', '$email', '$username', '$password')");
		
		
		header("location: addMsg.php");
?>

<!-- Mnipulacao de dados- datatable;
gerar relatorios(sig unisave pdf);
sweetalert2 
envio de emails
-->