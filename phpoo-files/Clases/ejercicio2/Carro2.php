<?php
//creación de la clase carro

class Carro2{
	//declaracion de propiedades
	public $color;
	public $modelo;
	public $fabricacion;
	private $verificacion;
	


	//declaracion del método verificación
	public function verificacion($fabricacion){
		$fecha=(int)substr($fabricacion, 0,4);
		
		if($fecha<1990){
			$this->verificacion= "No circula";
		}else if($fecha>=1990 && $fecha<2010){
			$this->verificacion= "Revisión";
		}else{
			
			$this->verificacion= "Si circula";
		}
		
	}

	public function get_verificacion(){
		return $this->verificacion;
	}
}

//creación de instancia a la clase Carro
$Carro1 = new Carro2();

if (!empty($_POST)){
	$Carro1->color=$_POST['color'];
	$Carro1->modelo=$_POST['modelo'];
	$Carro1->verificacion($_POST['fabricacion']);

}





