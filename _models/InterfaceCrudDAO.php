<?php

interface InterfaceCRUD{
	public function insert($data);
	public function listAll();
	public function update($data);
	public function delete($id);
}


?>