<?php 

session_start();

require_once'crudes.php';

$n=new Crud();

 


$areas=$_POST['area'];
$asunto=$_POST['asunto'];
$idusuario=$_SESSION['usuario'];
$mensaje=$_POST['mensaje'];

$temp =$_FILES['archivos']['tmp_name'];
 $directorio = "archivosinsidencias"; 
 $tipo=$_FILES['archivos']['type'];
                 
 $nombres = $_FILES['archivos']['name'];   
 $url=$directorio ."/" . $nombres;
 $fecha=date('y-m-d'); 



$sentencia ="SELECT count(ticket)as tiquete FROM insidentes";



                   foreach ( $n->consultar($sentencia) as $dato) {

                    $requeri=$dato['tiquete'];
                    

               }

$nuevotiquete=$requeri+1;







if ($_FILES['archivos']['error'] == UPLOAD_ERR_NO_FILE){

           $sql = "INSERT INTO insidentes(idareas,asunto,mensajes,rutaarchivos,estado,idusuario,fecha,ticket) VALUES ('$areas','$asunto','$mensaje','$url',1,'$idusuario','$fecha','$nuevotiquete');";

             $n->insertar($sql);

             echo '<html> 
             <head>
             <meta http-equiv="REFRESH" content="0;url=usuario.php">
             </head>
             </html>
            ';
 
}else{
        



                   

            

                if (move_uploaded_file($temp,$url))  
                {     

                    

            
             $sql = "INSERT INTO insidentes(idareas,asunto,mensajes,rutaarchivos,estado,idusuario,fecha,ticket) VALUES ('$areas','$asunto','$mensaje','$url',1,'$idusuario','$fecha','$nuevotiquete');";

             $n->insertar($sql);

             echo '<html> 
             <head>
             <meta http-equiv="REFRESH" content="0;url=usuario.php">
             </head>
             </html>
            ';






         }
               
            



}























 ?>
