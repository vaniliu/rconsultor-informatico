
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
		<ul class="navbar-nav ">
						 <li  class="nav-item" ><b><a class="nav-link " href="#nuevo1" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo Ticket</a></b></li>
						 <li  class="nav-item" ><b><a class="nav-link " href="usuario.php">Mis Ticket</a></b></li>
						 <li  class="nav-item" ><b><a class="nav-link "  href="index.php">Cerrar Sesion</a></b></li>
			          
		</ul>
		</div>
	</div>
	</nav>
	<br>
	<br>

	<section class="container">
		<section class="row">
			
			

			
			<table class="table table-bordered ">
				<tr class="tablausuarios">
					<th>No ticket</th>
					<th>Asunto</th>
					<th>Estado</th>
					<th>Fecha Atualizado</th>
					<th>Ver</th>
					
				</tr>
				<?php

                    require_once 'crudes.php';

                    $j=new Crud();

                    $sentencia ="SELECT insidentes.idinsidentes,estado.estado,insidentes.asunto,insidentes.fecha,insidentes.ticket FROM insidentes,estado where insidentes.idusuario='$idsession' AND insidentes.estado=estado.idestado";



                   foreach ( $j->consultar($sentencia) as $dato) {
                   	

                   	?>

                   	<tr>

                   		<td><?php echo $dato["ticket"];?></td>
                   		<td><?php echo $dato["asunto"];?></td>
                   		<td><?php echo $dato["estado"];?></td>
                   		<td><?php echo $dato["fecha"];?></td>
                   		
                   		<td><a href="historial.php?idinci=<?php echo $dato["ticket"]; ?>">ver</a></td>

                   	</tr>

 	                <?php

                     } 

                     ?>
				

			</table>
		
		</section>
	</section>



<div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <?php  include'nuevoticket.php'; ?>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>