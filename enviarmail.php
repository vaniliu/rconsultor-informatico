<?php 

require_once'crudes.php';
class Recuperar{


public $correos;

public function recupero($email){

$this->correos=$email;

$sentencia="SELECT * FROM usuarios WHERE email='$this->correos'";

 $j=new Crud();


 foreach ($j->consultar($sentencia) as $dato) {

$correo=$dato['email'];

$passbase=$dato['contrasena'];

 }

if ($this->correos===$correo) {



return 'se a enviado la clave  al correo '.$this->correos;
	
}else{
	
return 'el correo no se  encuentra registrado  
';

}







}

}

















 ?>