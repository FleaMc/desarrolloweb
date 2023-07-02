<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");

mysqli_select_db($c,$database);
$nombre = $_POST["usuario1"];
$pass = $_POST["clave1"];

echo "<h1>Registro de Administradores</h1>";
echo "Nombre: {$_POST['nombre1']}<br>";
echo "Usuario: " . $_POST['usuario1'] . "<br>";
echo "Clave: {$_POST['clave1']}<br>";

if ( strcmp ( $_POST['nombre1'] , "" ) !=0 )
{
/////instruccion para insertar

$instruccion="insert into Admin(Nombre,Usuario,Clave,Tipo)values
('{$_POST['nombre1']}','{$_POST['usuario1']}','{$_POST['clave1']}','{$_POST['tipo1']}')";

$r=mysqli_query($c,$instruccion);

if($r==true){
    echo "<br>Registro Guardado";
echo"<form action=log2.php method=POST>";
echo"<input type=hidden name=login value=$nombre >";
echo"<input type=hidden name=acceso value=''>";
echo"<input type=hidden name=loginpas value=$pass>";
echo"<input type=submit name=en value=Regresar>";
echo"</form>";
    
}



}
else
echo "<br>Registro no Guardado, Faltan Datos";
?>
