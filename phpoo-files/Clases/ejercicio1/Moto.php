<?php

//crea aqui la clase Moto junto con dos propiedades public

class Moto{
	public $marca;
	public $modelo;
}
$mensaje='';
//crea aqui la instancia o el objeto de la clase Moto
$Moto1=new Moto;


 if ( !empty($_POST)){

 	// recibe aqui los valores mandados por post y arma el mensaje para front 
	 $Moto1->marca=$_POST['marca'];
	 $Moto1->modelo=$_POST['modelo'];

	 $mensaje='Mensaje de seleccion de marca: '.$_POST['marca'].' y el Modelo: '.$_POST['modelo'];
}  

?>


