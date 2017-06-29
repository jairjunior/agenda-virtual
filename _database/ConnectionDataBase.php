<?php

	function connectionDataBase(){
		$server = 'localhost';
		$port = 3306;
		$database = "agenda_virtual";
		$user = "jairjunior";
		$password = "1234321";

		try {
			$connection = new PDO("mysql:
									host=$server;
									port=$port;
									dbname=$database",
									$user,
									$password,
									array(PDO::ATTR_PERSISTENT => true)
									);
		}
		catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
			die();
		}
		
		return $connection;
	}

?>