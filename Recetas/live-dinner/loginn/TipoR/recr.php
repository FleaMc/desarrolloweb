<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");

mysqli_select_db($c,$database);
$nombre = $_POST["login"];
$pass = $_POST["loginpas"];
echo "<h1>Registro de Recetas</h1>";
echo "TipoReceta: {$_POST['nombre1']}<br>";
echo "Descripcion: {$_POST['desc1']}<br>";

if ( strcmp ( $_POST['nombre1'] , "" ) !=0 )
{
/////instruccion para insertar
$ruta="imagenes/";
$archivo1=$_FILES['Imagen1']['tmp_name'];

$nombrearchivo1=$_FILES['Imagen1']['name'];

move_uploaded_file($archivo1,$ruta.$nombrearchivo1);

$tipo = $_POST['nombre1'];
$des = $_POST['desc1'];





$instruccion="insert into TiposR(TipoReceta,Descripcion,Imagen) values ('$tipo','$des','$ruta$nombrearchivo1')";

$r=mysqli_query($c,$instruccion);

echo "<br>Registro Guardado";
echo"<form action=../log2.php method=POST>";
echo"<input type=hidden name=login value=$nombre >";
echo"<input type=hidden name=loginpas value=$pass>";
echo  "<input type=hidden name=acceso value=no>";
echo"<input type=submit name=en value=Regresar>";
echo"</form>";
if (strcmp ($nombrearchivo1 , '' ) == 0) 
{ 
   
    
}  else{
     echo "<img src={$ruta}{$nombrearchivo1} width=200><br><br>";
}


}
else
echo "<br>Registro no Guardado, Faltan Datos";
?>
