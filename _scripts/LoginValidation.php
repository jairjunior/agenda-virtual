<?php
	session_start();
	require_once("./connectionDataBase.php");

	echo "<h1>Olá!</h1>";


	if( isset($_POST["email"]) && isset($_POST["password"]) ){
		
		$email = utf8_encode( htmlspecialchars($_POST["email"]) );
		$password = utf8_encode( htmlspecialchars($_POST["password"]) );

		try {
			$connection = connectionDataBase();
			$query = 'SELECT * FROM usuario WHERE email=? AND senha=MD5(?)';
			$params = array($email, $password);

			$statement = $connection->prepare($query);
			$result = $statement->execute( $params );		
			echo "<p>result: </p>";
			var_dump( $result );

			$result2 = $statement->fetchAll();
			echo "<p>result2: </p>";
			echo "<pre>";
			print_r($result2);
			echo "</pre>";

			$connection = null;
		}

		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
			die();
		}
	}

?>