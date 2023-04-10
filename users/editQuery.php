<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$id	= $_POST['id'];
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$username = $_POST['email'];
		$password = $_POST['password'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($connect, "UPDATE users SET name = '$name', contact = '$contact', email = '$email'  WHERE id = '$id' ");

	/*PDO
		$stmt = $pdo->prepare("UPDATE users SET name=?, contact=?, email=?, username=?, password=? WHERE id=?");
		$stmt->execute([$name, $contact, $email, $username, $password, $id]);
	*/
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: editMsg.php");
?>