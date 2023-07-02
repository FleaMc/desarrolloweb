<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("error en la coneccion");

mysqli_select_db($c,$database);
echo "<h1>Actualizacion de Chefs</h1>";


$ant = $_POST["anterior"];
echo "Receta: " .$_POST['receta1'] . "<br>";
echo "$ant";
if ( strcmp ( $_POST['receta1'] , "" ) !=0 )
{
/////instruccion para Modificar
$instruccion="Update TipoRecetas set TipoReceta='{$_POST['receta1']}'

where TipoReceta='$ant'";
$r=mysqli_query($c,$instruccion);
echo "<br>Registro Actualizado";
}
else
echo "<br>Registro no actualizado, Faltan Datos";
?>
