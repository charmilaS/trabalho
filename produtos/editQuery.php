<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
	$id	= $_POST['id'];
	$cod= $_POST['cod'];
	$name= $_POST['name'];
	$price = $_POST['price'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($connect, "UPDATE produtos SET cod = '$cod', name = '$name', price = '$price'  WHERE id = '$id' ");

	
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: editMsg.php");
?>