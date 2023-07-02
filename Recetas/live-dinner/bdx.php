<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");

mysqli_select_db($c,$database);
echo "Nombre: {$_POST['nombre2']}<br>";
echo "Usuario: " . $_POST['usuario2'] . "<br>";
echo "Clave: {$_POST['clave2']}<br>";
$ustemp = $_POST["usuario2"];

if(strcmp("eli",$_POST['tipo'])==0)
{
  echo "<h1>Página para eliminar</h1>"; 
  echo "Delete...Mysql";
 $instruccion="delete from Admin where Nombre='{$_POST['nombre2']}'";
$r=mysqli_query($c,$instruccion);
echo "<br>Registro ELIMINADO";
}
if(strcmp("act",$_POST['tipo'])==0)
{
  echo "<form action=int141.php method=POST>";
  echo "<h1>Página para actualizar</h1>"; 
  echo "Nombre: <input type=text value={$_POST['nombre2']} name=nombre1><br>";
echo "Usuario: <input type=text value={$_POST['usuario2']} name=usuario1><br>";
echo "<input type=hidden name=anterior value=$ustemp>";
echo "Clave: <input type=text value={$_POST['clave2']} name=clave1><br>";
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