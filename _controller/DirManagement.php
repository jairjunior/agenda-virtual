<?php

class DirManagement{

	/*=========================================================================
	 *
	 * Método que checa se a pasta de imagens do usuário existe.
	 * Retorna "true" se existir ou "false" se não existir.
	 *
	 *=======================================================================*/
	public function isUserImgDir($dir){

		if( is_dir($dir) )
			return true;
		else
			return false;
	}
	
	/*=========================================================================
	 *
	 * Método que cria a pasta de imagens do usuário com a subpasta p/ imagens
	 * dos seus contatos. Retorna "true" ou "false".
	 *
	 *=======================================================================*/
	public function createUserImgDir($dir){
		
		if( !mkdir($dir, 0700) )
			return false;

		elseif( !mkdir($dir."/contacts", 0700) )
			return false;

		else
			return true;

	}

}

?>