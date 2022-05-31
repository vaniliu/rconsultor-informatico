<?php session_start();

$idsession=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ingreso usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<header>
		<section class="container">
			<h1>Consultor Informatico</h1>
		</section>
	</header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
						 <li  class="nav-item" ><b><a class="nav-link " href="usuario.php">Regresar a mis tickets</a></b></li>
			          
		</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>
<section class="container">
		<section class="row">
			<section class="col-md-2">
			</section>
<section class="col-md-8">
<?php  

$nticket=$_GET['idinci'];





                    require_once 'crudes.php';

                    $j=new Crud();

                    $sentencia ="SELECT insidentes.idinsidentes,estado.estado,insidentes.asunto,insidentes.fecha,insidentes.ticket,insidentes.mensajes,insidentes.rutaarchivos,area.area FROM insidentes,estado,area where insidentes.ticket='$nticket' AND insidentes.estado=estado.idestado AND insidentes.idareas=area.idarea";



                   foreach ( $j->consultar($sentencia) as $dato) {
                   	

                 

                   

                   	     echo "<label>Ticket No: </label> <b>".$dato["ticket"]."</b><br><br>";

                   		 echo "<label>Asunto:  </label>".$dato["asunto"]." <label> Estado requerimiento: </label>".$dato["estado"]."<br><br>";
                   	      
                   	     echo "<label>Fecha de solicitud: </label>".$dato["fecha"]." <label> Area asignada: </label>".$dato["area"]."<br><br>";

                   	      echo "<label> Mensaje Solicitud: </label> <br> <textarea style='overflow: scroll;'rows='10' cols='100'>".$dato["mensajes"]."</textarea>";

                   	    $ruta=$dato['rutaarchivos'];

                   	    $num=strlen($ruta);

                   	      	 if ($num<=20) {
                   	      	 	echo "<br> <label>No tiene Adjunto</label>";
                   	      	 }else{
                   	      	 	echo  "<label>Archivo Adjunto :</label><a class='boton btn' href=".$dato["rutaarchivos"].">Descargar</a>";
                   	      	 }





                   	     



                   		
                   		

               

 	       

                     } 

                     ?>





</section>
		<section class="col-md-2">
		</section>


</section>
</section>
<br>
<br>
<section class="container">
	<section class="col-md-12">
			<button class="collapsible">Respuestas</button>
                <section class="content">
                     
                     <?php 
                     $j=new Crud();

                    $sentencia ="SELECT * FROM respuestas where ticket='$nticket'";



                   foreach ( $j->consultar($sentencia) as $dato) {


                   	      
                   	    // echo "<label>Fecha de solicitud: </label>".$dato["fechares"]."<br>";

                   	      echo "<label> Respuestas Dia : </label>".$dato["fechares"]." <br> <textarea style='overflow: scroll;'rows='5' cols='150'>".$dato["respuesta"]."</textarea><br>";

                     } 
                      ?>







                  </section>
</section>


<br>
<br>





       </section>
</section>





<script src="js/desplegable.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>