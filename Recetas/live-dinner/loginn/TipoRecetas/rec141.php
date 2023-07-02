<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("error en la coneccion");

mysqli_select_db($c,$database);
echo "<h1>Actualizacion de Recetas</h1>";
echo "TipoReceta: {$_POST['usuario1']}<br>";
echo "Descripcion: {$_POST['desc2']}<br>";
echo "Categoria: {$_POST['cat2']}<br>";
$recant = $_POST['anterior'];

$nombre = $_POST["log"];
$pass = $_POST["log2"];
if ( strcmp ( $_POST['usuario1'] , "" ) !=0 )
{
/////instruccion para Modificar
$ruta="imagenes/";
$archivo1=$_FILES['Imagen1']['tmp_name'];

$nombrearchivo1=$_FILES['Imagen1']['name'];

move_uploaded_file($archivo1,$ruta.$nombrearchivo1);


$instruccion="Update TipoRecetas set TipoReceta= '{$_POST['usuario1']}', Descripcion='{$_POST['desc2']}',Categoria='{$_POST['cat2']}' where TipoReceta='$recant'";
if (strcmp ($nombrearchivo1, '' ) == 0) 
{
echo   "<br>No se selecciono foto a modificar<br>";
    
}else{
$instruccion="Update TipoRecetas set Ruta_Foto='$ruta$nombrearchivo1' where TipoReceta='$recant'"; 
    }
    
    
$r=mysqli_query($c,$instruccion);

echo "<br>Registro Actualizado";
echo"<form action=../log2.php method=POST>";

echo"<input type=hidden name=login value=$nombre >";
echo"<input type=hidden name=loginpas value=$pass>";
echo  "<input type=hidden name=acceso value=no>";
echo"<input type=submit name=en value=Regresar>";
}
else
echo "<br>Registro no actualizado, Faltan Datos";
?>
