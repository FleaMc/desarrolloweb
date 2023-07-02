<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

mysqli_select_db($c,$database);
 json_encode($_POST);
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$arch1 = $_POST['arch1'];
$autor = $_POST['autor1'];
$ruta= 'Archivostxt/'. $arch1;


$instruccion="Delete from Wiki where Archivo='$arch1'";
unlink($ruta);
$r=mysqli_query($c,$instruccion);   
 echo "<div align=center> ";
           
                 echo "<H1>Eliminado</H2 >";
                 echo"<form action=elim.php method=POST>";
              
            
                 echo"<input type=hidden name=login value='$nombre'>";
                 echo"<input type=hidden name=loginpass value='$pass'>";
                   echo"<input type=hidden name=autor1 value=$autor>";
                      echo"<input type=submit name=en value=Volver>";
                 echo"</form>";
                 echo "</div>";


?>
