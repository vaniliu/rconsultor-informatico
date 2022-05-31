<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<section class="container">
	<section class="row">
		
		

		<section class="col-md-5">
			<form action="regist.php" method="POST">

				    <section class="form-group">
			              <label for="nombre">Nombre:</label>
		                  <input class="form-control" name="nombre" type="text" placeholder="Nombre:"  >
			
		            </section>
		             <section class="form-group">
			              <label for="apellido">Apellido:</label>
		                  <input class="form-control" name="apellido" type="text" placeholder="Apellido:"  >
			
		            </section>
		             <section class="form-group">
			              <label for="email">Email:</label>
		                  <input class="form-control" name="correo" type="email" placeholder="Correo:"  >
			
		            </section>
		             <section class="form-group">
			              <label for="usuario">Usuario:</label>
		                  <input class="form-control" name="usuario" type="text" placeholder="Usuario:"  >
			
		            </section>
		            <section class="form-group">
			              <label for="contrasena">Contraseña:</label>
		                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña:"  >
			
		            </section>
		            
		            <section class="form-group">
		                        <button class="boton btn ">Registrarse</button>
		                        
	                </section>
				
			</form>
			<br>
	<?php 

error_reporting(0);

require_once 'crudes.php';

$j=new Crud();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$usua=$_POST['usuario'];
$pass=$_POST['contrasena'];

if (empty($nombre)& empty($apellido) & empty($correo) & empty($usua)  & empty($pass)) {


}else{

$sentencia="INSERT INTO usuarios(nombres,apellidos,email,usuario,contrasena,idrol) VALUES('$nombre','$apellido','$correo','$usua','$pass',1);";

$j->insertar($sentencia);

header('location: exito.php');



}




?>
			
		</section>
		
	</section>
</section>


<!--no se  utiliza  nada  debajo de  esta linea-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>