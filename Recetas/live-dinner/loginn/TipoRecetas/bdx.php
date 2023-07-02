<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");

mysqli_select_db($c,$database);
$nombre = $_POST["log"];
$pass = $_POST["log2"];
$recant = $_POST['recetanueva'];
$desc = '$_POST["desc"]';
$cat = $_POST["cat"];
$ruta = $_POST["fot"];
if(strcmp("eli",$_POST['tipo'])==0)
{
  echo "<h1>Página para eliminar</h1>"; 
  echo "Delete...Mysql";
if (strcmp ($ruta , 'imagenes/' ) == 0) 
{ 
   
    
}  else{
      unlink("$ruta");  
}
  
  

 $instruccion="delete from TipoRecetas where TipoReceta='{$_POST['recetanueva']}'";

echo"</form>";
$r=mysqli_query($c,$instruccion);
echo "<br>Registro ELIMINADO";
echo"<form action=../log2.php method=POST>";
echo"<input type=hidden name=login value=$nombre >";
echo"<input type=hidden name=loginpas value=$pass>";
echo  "<input type=hidden name=acceso value=no>";
echo"<input type=submit name=en value=Regresar>";
}
if(strcmp("act",$_POST['tipo'])==0)
{
  echo "<form action=rec141.php method=POST enctype=multipart/form-data>";
  echo "<h1>Página para actualizar</h1>"; 
  


  
echo "TipoReceta: <input type=text value='{$_POST['recetanueva']}' name=usuario1><br>";
echo "Descripcion: <input type=text value='{$_POST['desc']}' name=desc2><br>";
echo "Categoria: <input type=text value={$_POST['cat']} name=cat2><br>";
echo "<br><br>";
echo "              <b>Modificar imagen: [El nombre del los archivos NO deben tener Espacios, puede usar guion bajo][Maximo:250KB]";
echo"              </b><br><br><br>";
echo"              <input type=file name=Imagen1><br><br><BR>";


echo "<input type=hidden name=anterior value='$recant'>";
echo"<input type=hidden name=log value=$nombre >";
echo"<input type=hidden name=log2 value=$pass>";

echo "<input type=submit name=en value=MODIFICAR>";
echo"</form>";


}

if(strcmp("con",$_POST['tipo'])==0)
{
  echo "<h1>Consulta</h1>"; 
  echo "TipoReceta: {$_POST['usuario2']}<br>";

}


///// Código para eliminar opara modificar
?>