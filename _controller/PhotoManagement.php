<?php

class PhotoManagement{

	/*=========================================================================
	 *
	 * Método que checa se a foto do usuário existe.
	 * Retorna "true" se existir ou "false" se não existir.
	 *
	 *=======================================================================*/
	public function isUserPhoto($file){

		if( file_exists($file) )
			return true;
		else
			return false;
	}


}

?>