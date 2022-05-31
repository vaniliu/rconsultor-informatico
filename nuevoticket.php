<?php 


$_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="container">
	<section class="row">
		
		<!-- formulario -->

		<section class="col-md-5">
			<form action="guardarticket.php" method="POST" enctype="multipart/form-data">

				    <section class="form-group">
			              <label for="nombre">Area:</label>

			               <select class="form-control" name="area">
			               	<option>Seleccione Area</option>

			              <?php

                    require_once 'crudes.php';

                    $j=new Crud();

                    $sentencia ="SELECT * FROM area";



                   foreach ( $j->consultar($sentencia) as $dato) {

                   	?>

                   	
		                <option value="<?php echo $dato['idarea']; ?>"><?php echo $dato['area']; ?></option>
		                  	

                   	

 	                <?php

                     } 

                     ?>


		                 
		                  	
		                  </select>
			
		            </section>
		             <section class="form-group">
			              <label for="asunto">Asunto:</label>
		                  <input class="form-control" name="asunto" type="text" placeholder="Asunto:" required="" >
			
		            </section>
		             <section class="form-group">
			              <label for="mensaje">Mensaje:</label>
		                  <textarea class="form-control" name="mensaje"  placeholder="Escribir tmensaje:" required="" ></textarea>
			
		            </section>
		            
		            <section class="form-group">
			              <label for="archivo">Adjuntar Archivo:</label>
		                  <input class="form-control" name="archivos" type="file" size="200"  >
			
		            </section>
		            <section class="form-group">
		                        <button class="boton btn-primary ">Generar ticket</button>
		                        
	                </section>
				
			</form>
			
		</section>
		<!-- fin del  form-->

	</section>
</section>


<!--no se  utiliza  nada  debajo de  esta linea-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>