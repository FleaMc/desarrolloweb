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
$ruta= 'Archivostxt/'. $arch1;
$contenido = $_POST['contenido1'];;
$archivo = fopen($ruta,'a');
fputs($archivo,$contenido);
fclose($archivo);

if ( strcmp ( $_POST['titulo1'] , "" ) !=0 )
{
/////instruccion para insertar
$instruccion="insert into Wiki(Titulo,Autor,Fecha,Archivo,Usuario)values
('{$_POST['titulo1']}','{$_POST['autor1']}','{$_POST['fecha1']}','{$_POST['arch1']}','$nombre')";

$r=mysqli_query($c,$instruccion);   
 echo "<div align=center> ";
           
                 echo "<H1>Guardado </H2 >";
                 echo"<form action=ini.php method=POST>";
              
            
                 echo"<input type=hidden name=login value='$nombre'>";
                 echo"<input type=hidden name=loginpass value='$pass'>";
                      echo"<input type=submit name=en value=Volver>";
                 echo"</form>";
                 echo "</div>";

}
?>
