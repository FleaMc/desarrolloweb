<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");

mysqli_select_db($c,$database);

$receta = $_POST["usuario2"];
echo "Receta: " . $_POST['usuario2'] . "<br>";   


if(strcmp("eli",$_POST['tipo'])==0)
{
  echo "<h1>Página para eliminar</h1>"; 
  echo "Delete...Mysql";
 $instruccion="delete from TipoRecetas where TipoReceta='{$_POST['nombre2']}'";
$r=mysqli_query($c,$instruccion);
echo "<br>Registro ELIMINADO";
}
if(strcmp("act",$_POST['tipo'])==0)
{
  echo "<form action=chef141.php method=POST>";
  echo "<h1>Página para actualizar</h1>"; 
  echo "<input type=hidden name=anterior value=$receta>";
  echo "Receta: <input type=text value={$_POST['usuario2']} name=receta1><br>";
echo "<input type=submit name=en value=MODIFICAR>";
echo "</form>";
}

if(strcmp("con",$_POST['tipo'])==0)
{
  echo "<h1>Consulta</h1>"; 
  echo "insert into...Mysql"."<br>";
  echo "Nombre: {$_POST['nombre2']}<br>";
echo "Usuario: " . $_POST['usuario2'] . "<br>";
echo "Clave: {$_POST['clave2']}<br>";
  
}


///// Código para eliminar opara modificar
?>