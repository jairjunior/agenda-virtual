<?php
	session_start();
	require_once("../_model/ConnectToDatabase.php");
	require_once("../_model/UserDAO.php");
	require_once("DirManagement.php");
	require_once("PhotoManagement.php");


	if( isset($_POST["email"]) && isset($_POST["password"]) ){
		
		$email = strtolower( utf8_encode( htmlspecialchars($_POST["email"]) ) );
		$password = utf8_encode( htmlspecialchars($_POST["password"]) );
		
		$userDao = new UserDAO();
		$user = $userDao->searchByEmail($email);

		if($user != null){
			$encryptedPsw = md5($password);

			if( $encryptedPsw == $user->getPassword() ){
				$_SESSION["loggedInUserName"] = $user->getName();
				$_SESSION["loggedInUserLastName"] = $user->getLastName();
				$_SESSION["loggedInUserEmail"] = $user->getEmail();
				$_SESSION["loggedInUserPermission"] = $user->getAdmin();
				$_SESSION["loggedInUserImgDir"] = "../_images/".$user->getIdUser()." - ".$user->getName();

				// Estando logado, verifica a existência da pasta de imagens do usuário
				// Se não existir, ela será criada.
				$dirMngmt = new DirManagement();
				if( !$dirMngmt->isUserImgDir( $_SESSION["loggedInUserImgDir"] ) )
					$dirMngmt->createUserImgDir( $_SESSION["loggedInUserImgDir"] );

				// Também verifica se já existe a foto de perfil do usuário.
				// Se não existir, será usada a imagem padrão de acordo com o sexo.
				$photoMngmt = new PhotoManagement();
				$imgPath = $_SESSION["loggedInUserImgDir"]."/".$user->getIdUser()."-".$user->getName()."-profile.jpg";
				if( $photoMngmt->isUserPhoto($imgPath) )
					$_SESSION["loggedInUserPhoto"] = $imgPath;
				else
					$_SESSION["loggedInUserPhoto"] = "../_images/general_male_user_profile_image.jpg";


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