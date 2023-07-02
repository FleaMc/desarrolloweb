<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la conexion");

mysqli_select_db($c,$database);
echo json_encode($_POST);



if ( strcmp ( $_POST['nombre1'] , "" ) !=0 )
{
/////instruccion para insertar
$instruccion="insert into UsuariosWiki(Autor,Usuario,Contraseña)values
('{$_POST['nombre1']}','{$_POST['usuario1']}','{$_POST['clave1']}')";

$r=mysqli_query($c,$instruccion);   









}
?>
