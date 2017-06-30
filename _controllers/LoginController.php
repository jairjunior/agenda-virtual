<?php
	session_start();
	require_once("../_models/ConnectToDatabase.php");
	require_once("../_models/UsersDAO.php");

	echo "<h1>Olá!</h1>";


	if( isset($_POST["email"]) && isset($_POST["password"]) ){
		
		$email = utf8_encode( htmlspecialchars($_POST["email"]) );
		$password = utf8_encode( htmlspecialchars($_POST["password"]) );

		
		$userDao = new UsersDAO();
		$listaDeUsuarios = $userDao->listAll();

		echo "<pre>";
		var_dump($listaDeUsuarios);
		echo "</pre>";

	}

?>