<?php
	include_once("../_db.php");
	
	$id = $_GET['id'];

	$query = mysqli_query($connect, "DELETE FROM users WHERE id = '$id'");
	
	/* PDO
		$stmt =$pdo->prepare("delete from user where id=" . $_GET['id']);
		$stmt->execute();
		
		ou
		$stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
		$stmt->execute([$id]);
	*/
	
	header("location: deleteMsg.php");
?>