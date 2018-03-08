<?php
	session_start();
	require_once("../_model/ConnectToDatabase.php");
	require_once("../_model/UsersDAO.php");


	if( isset($_POST["email"]) && isset($_POST["password"]) ){
		
		$email = strtolower( utf8_encode( htmlspecialchars($_POST["email"]) ) );
		$password = utf8_encode( htmlspecialchars($_POST["password"]) );
		
		$userDao = new UsersDAO();
		$user = $userDao->searchByEmail($email);

		if($user != null){
			$encryptedPsw = md5($password);

			if( $encryptedPsw == $user->getPassword() ){
				$_SESSION["loggedInUserName"] = $user->getName();
				$_SESSION["loggedInUserLastName"] = $user->getLastName();
				$_SESSION["loggedInUserEmail"] = $user->getEmail();
				$_SESSION["loggedInUserPermission"] = $user->getAdmin();

				header('Location: ../_view/agenda.php');
			}
			else {
				header('Location: ../_view/login.php?error=LOGIN_ERROR');
			}
		}

		else {
			header('Location: ../_view/login.php?error=LOGIN_ERROR');
		}

	}

	else {
		header('Location: ../_view/login.php?error=LOGIN_NEEDED');
	}

?>