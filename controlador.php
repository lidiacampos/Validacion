<?php  
//Contiene el objeto Vista.
	class Controlador{

		private $vista;

	public function __construct(){
		$this->vista = new View();
	}

    public function getVista(){
        return $this->vista;
    }

    public function setVista($vista){
        $this->vista = $vista;
    }
}

?>