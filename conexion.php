<?php 

Class Conexion{

	public $server ='mysql:dbname=asistente;host=localhost;port=3307';
	public $usuario= "root";
	public $pass ="";
	


public function conectar(){


try {


	$con = new PDO($this->server,$this->usuario,$this->pass);

	


	return $con;
	
} catch (PDOException $e) {

	echo "error en la  conenxion".$e->getMessage();
	
}


}
}



 ?>