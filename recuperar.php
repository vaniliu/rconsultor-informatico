<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recuperar Clave</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<header>
	<section class="container">
		<h1>Consultor  Informatico</h1>
			<span id="colortitulo">Recuperar Contraseña</span>
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

	<section class="login container">
	<section class="row">
		

		<section class="col-xs-12 col-sm-7 col-md-7">
			<form action="recuperar.php" method="POST">

				    <section class="form-group">
			              <label for="Email">Email:</label>
		                  <input class="form-control" name="correo" type="email" placeholder="Ingrese correo"  >
			
		            </section>
		           
		            <section class="form-group">
		                        <button class="boton btn ">Recuperar</button>
		            </section>

		            <?php 
		            error_reporting(0);
		            include'enviarmail.php';

		            $n= new Recuperar();

		            $email=$_POST['correo'];

		            if (empty($email)) {
		            	

		            }else{

		            	echo $n->recupero($email);

		            }

		            


		             ?>
				
			</form>
			
		</section>
		
		

	</section>
	

</section>









<footer class="pie">
		<section class="container">
			<br>
			<span ><img class="contacto" src="https://png.icons8.com/ios/50/000000/contacts.png"> Elaborado por: Brenda Vanessa Nieto,Juan Manuel Moreno</span>
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
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<style>
#colortitulo{
	color: #FFFFFF;
}
</style>