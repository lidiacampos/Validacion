<?php  
class Usuarios{
	private $usuario;
	private $contraseña;

	public function __construct(){
		$this->usuario = '';
		$this->contraseña = '';
	}

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getPassword(){
        return $this->contraseña;
    }

    public function setPassword($contraseña){
        $this->contraseña = $contraseña;
    }

    public function validar($usuario, $contraseña){
    	if(($usuario == 'admin') && ($contraseña == '123456')){
			return true;
    	}
		return false;
    }

    

}

?>