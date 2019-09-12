<?php  
//El metodo ''MostrarVista' te dirige a la pagina que mande en la pagina de validacion.
class View{

	public function __construct()
	{
		
	}

	public function mostrarVista($nombreVista){
		require $nombreVista. '.php';
	}

}

?>