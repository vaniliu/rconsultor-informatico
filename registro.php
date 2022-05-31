<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<header>
		<section class="container">
			<h1>Consultor Informatico</h1>
			<span id="colortitulo">Registro</span>
		</section>
	</header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ms-auto">
						 <li  class="nav-item" ><b><a class="nav-link "  href="index.php">Inicio</a></b></li>
			             <li  class="nav-item" ><b><a class="nav-link" href="quien.php">Quienes somos</a></b></li>
			             <li  class="nav-item" ><b><a class="nav-link" href="preguntas.php">Preguntas frecuentes</a></b></li>
			             <li  class="nav-item" ><b><a class="nav-link"  href="contactenos.php">Contactenos</a></b></li>
			             <li  class="nav-item" ><b><a class="nav-link"   href="login.php">Iniciar sesión</a></b></li>
			             <li  class="nav-item" ><b><a class="nav-link"  href="registro.php">Registrarse</a></b></li>
		</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>

	<section class="login container">
	<section class="row">
		
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>

		<section class="col-xs-12 col-sm-8 col-md-8">
			<form action="registro.php" method="POST">

				    <section class="form-group">
			              <label for="nombre">Nombre:</label>
		                  <input class="form-control" name="nombre" type="text" placeholder="Nombre:" >
			
		            </section>
		             <section class="form-group">
			              <label for="apellido">Apellido:</label>
		                  <input class="form-control" name="apellido" type="text" placeholder="Apellido:">
			
		            </section>
		             <section class="form-group">
			              <label for="email">Email:</label>
		                  <input class="form-control" name="correo" type="email" placeholder="Correo:" >
			
		            </section>
		            <section class="form-group">
			              <label for="usuario">Usuario:</label>
		                  <input class="form-control" name="usuario" type="text" placeholder="Usuario:">
			
		            </section>
		            <section class="form-group">
			              <label for="contrasena">Contraseña:</label>
		                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña:">
			
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
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>
		




	</section>
	

</section>




<footer class="pie">
		<section class="container">
			<br>
			<span ><img class="contacto" src="https://png.icons8.com/ios/50/000000/contacts.png"> Elaborado por:Brenda Vanessa Nieto, Juan Manuel Moreno</span>
			<br>
			<span ><img class="contacto" src="https://png.icons8.com/ios/50/000000/email.png"> Email: brenda.1990_@hotmail.com</span>
			<br>
			<span><img class="contacto" src="https://png.icons8.com/ios/50/000000/phone.png"> Telefono: 3165674672</span>
			<br>
			<br>
			
			<label>Siguenos en:</label>
			<br>
			<a href="https://www.facebook.com"><img class="redes"  src="https://png.icons8.com/ios/50/000000/facebook.png"></a>
			<a href="https://www.twitter.com"><img  class="redes" src="https://png.icons8.com/ios/50/000000/twitter.png"></a>
			<a href="https://www.instagram.com"><img  class="redes" src="https://png.icons8.com/ios/50/000000/camera.png"></a>
		</section>
	</footer>




<!--no se  utiliza  nada  debajo de  esta linea-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<style>
#colortitulo{
	color: #FFFFFF;
}
</style>