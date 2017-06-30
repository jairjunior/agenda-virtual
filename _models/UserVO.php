<?php

final class UserVO{
	private $idUser;
	private $name;
	private $lastName;
	private $email;
	private $password;
	private $admin;
	private $creation;
	private $modified;

	/* Métodos Getter and Setter para atributo "idUser" */
	public function setIdUser($id){
		$this->idUser = $id;
	}

	public function getIdUser(){
		return $this->idUser;
	}

	/* Métodos Getter and Setter para atributo "name" */
	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	/* Métodos Getter and Setter para atributo "lastName" */
	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getLastName(){
		return $this->lastName;
	}

	/* Métodos Getter and Setter para atributo "email" */
	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}

	/* Métodos Getter and Setter para atributo "password" */
	public function setPassword($psw){
		$this->password = $psw;
	}

	public function getPassword(){
		return $this->password;
	}

	/* Métodos Getter and Setter para atributo "admin" */
	public function setAdmin($adm){
		$this->admin = $adm;
	}

	public function getAdmin(){
		return $this->admin;
	}

	/* Métodos Getter and Setter para atributo "creation" */
	public function setCreation($creation){
		$this->creation = $creation;
	}

	public function getCreation(){
		return $this->creation;
	}

	/* Métodos Getter and Setter para atributo "modified" */
	public function setModified($modified){
		$this->modified = $modified;
	}

	public function getModified(){
		return $this->modified;
	}

}



?>