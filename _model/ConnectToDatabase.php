<?php

class ConnectToDatabase{

	/*
	 * Método público e estático para conectar-se ao banco de dados.
	 * Público porque pode ser acessado de forada classe;
	 * Estático porque pode ser acessado sem instanciar a classe.
	*/
	public static function connect(){

		// Cria objeto da classe mysqli
		$connection = new mysqli("localhost", "jairjunior", "1234321", "agenda_virtual", 3306);

		// Verifica se a conexão com o banco de dados foi bem sucedida
		if($connection->connect_errno)
			die('Connect Error: (' . $$connection->connect_errno . ') ' . $connection->connect_error);
		
		// Se a conexão foi feita, retorna o identificador da conexão
		else
			return $connection;

	}
	
}

?>