<?php 

session_start();

require_once'crudes.php';

$user=$_POST['usuario'];
$pass=$_POST['contrasena'];

$sentencia="SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$pass'";

 $j=new Crud();


 foreach ($j->consultar($sentencia) as $dato) {

$usuariobase=$dato['usuario'];
$passbase=$dato['contrasena'];

 }

if ($user===$usuariobase & $pass===$passbase) {

$_SESSION['usuario']=$dato['idusuarios'];

header('location: usuario.php');
	
}else{
	header('location: login.php');
}










 ?>