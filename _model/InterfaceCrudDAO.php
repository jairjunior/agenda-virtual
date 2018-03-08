<?php

interface InterfaceCrudDAO{
	public function insert($data);
	public function selectAll();
	public function update($data);
	public function delete($id);
}


?>