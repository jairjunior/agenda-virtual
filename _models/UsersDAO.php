<?php
include_once 'ConnectToDatabase.php';
include_once 'UserVO.php';
include_once 'InterfaceCRUD.php';


class UsersDAO implements InterfaceCRUD{

 private $mysqli = null;


	public function __construct(){
		$this->mysqli = ConnectToDatabase::connect();
	}

	public function __destruct(){
		$this->mysqli->close();
	}

	/*======================================================================
	 *
	 *Método que insere uma nova linha na tabela. (Cria uma nova entrada)
	 *
	 *=====================================================================*/
	public function insert($data){

	}

	/*======================================================================
	 *
	 * Método que recupera todos as entradas (linhas) da tabela.
	 *
	 *=====================================================================*/
	public function listAll(){

		$result = $this->mysqli->query("SELECT * FROM users");

		$listOfUsers = array();
		
		while( $row = $result->fetch_array(MYSQLI_ASSOC) ){
			$user = new UserVO();
			$user->setIdUser( $row["idUser"] );
			$user->setName( $row["name"] );
			$user->setLastName( $row["lastName"] );
			$user->setEmail( $row["email"] );
			$user->setPassword( $row["password"] );
			$user->setAdmin( $row["admin"] );
			$user->setCreation( $row["creation"] );
			$user->setModified( $row["modified"] );

			$listOfUsers[] = $user;
		}

		return $listOfUsers;
	}

	/*======================================================================
	 *
	 * Método que atualiza uma linha da tabela.
	 *
	 *=====================================================================*/
	public function update($data){

	}

	/*======================================================================
	 *
	 * Método que exclui uma linha da tabela.
	 *
	 *=====================================================================*/
	public function delete($id){

	}

	/*======================================================================
	 *
	 * Método que procura usuário na tabela pelo e-mail.
	 * Pressupõe-se que há apenas uma única entrada na tabela com aquele e-mail.
	 *
	 *=====================================================================*/
	public function searchByEmail($email){
		$result = $this->mysqli->query("SELECT * FROM users WHERE email = '".$email."'");

		$user = null;

		if( $row = $result->fetch_array(MYSQLI_ASSOC) ){
			$user = new UserVO();
			$user->setIdUser( $row["idUser"] );
			$user->setName( $row["name"] );
			$user->setLastName( $row["lastName"] );
			$user->setEmail( $row["email"] );
			$user->setPassword( $row["password"] );
			$user->setAdmin( $row["admin"] );
			$user->setCreation( $row["creation"] );
			$user->setModified( $row["modified"] );
		}
		return $user;
	}

}

?>