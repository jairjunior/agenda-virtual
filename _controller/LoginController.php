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
				$_SESSION["loggedUserName"] = $user->getName();
				$_SESSION["loggedUserLastName"] = $user->getLastName();
				$_SESSION["loggedUserEmail"] = $user->getEmail();
				$_SESSION["loggedUserPermission"] = $user->getAdmin();

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