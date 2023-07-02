<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("error en la coneccion");

mysqli_select_db($c,$database);
$ant = $_POST["anterior"];
$nombre = $_POST["usuario1"];
$pass = $_POST["clave1"];
echo "<h1>Actualizacion de Administradores</h1>";
echo "Nombre: {$_POST['nombre1']}<br>";
echo "Usuario: " .$_POST['usuario1'] . "<br>";
echo "Clave:  ".$_POST['clave1'] . "<br>";
if ( strcmp ( $_POST['nombre1'] , "" ) !=0 )
{

/////instruccion para Modificar
$instruccion="Update Admin set Nombre='{$_POST['nombre1']}',
Usuario='{$_POST['usuario1']}', Clave='{$_POST['clave1']}'
 where Usuario='$ant'";
$r=mysqli_query($c,$instruccion);
echo "<br>Registro Actualizado";
echo"<form action=log2.php method=POST>";
echo"<input type=hidden name=login value='' >";
echo"<input type=hidden name=loginpas value=''>";
echo "<input type=hidden name=acceso value='si'>";
echo"<input type=submit name=en value=Regresar>";
echo"</form>";
}else{
echo "<br>Registro no Guardado, Faltan Datos";
}
?>
