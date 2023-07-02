<?php
include 'conexion.php';

$nombre = $_POST["log"];
$pass = $_POST["log2"];

echo "<H1>Administracion de tipos de receta </H1>";

 $sql="select * from TiposR";
 $r=mysqli_query($c,$sql);
 
echo "<center><table border=1>";

echo "<tr>";
              echo "<td width=100> Categoria  </td>";
              echo "<td width=100>Descripcion</td>";
              echo "<td width=100>Imagen</td>";
         
              echo "</tr>";


 while ($arr=mysqli_fetch_array($r))
      {
                echo "<tr>";
echo "<td width=100>" . $arr['TipoReceta'] . "</td>";
echo "<td width=100>" . $arr['Descripcion'] . "</td>";
          
if (strcmp ( $arr["Imagen"], 'imagenes/' ) == 0) 
{ 
echo  "<td width=100> No hay imagen  </td>"; 
}  else{
$ruta = $arr["Imagen"]; 
echo  "<td width=200> <img src='TipoR/$ruta'   width=100%>  </td>";
}
 


echo "<td width=20>.";
echo"<form action=TipoR/bdx.php method=POST>";
$rec = $arr['TipoReceta'];
echo"<input type=hidden name=recetanueva value='$rec'>";
echo"<input type=hidden name=desc value=".$arr['Descripcion'].">";
echo"<input type=hidden name=fot value=".$arr['Imagen'].">";
echo"<input type=hidden name=log value=$nombre>";
echo"<input type=hidden name=log2 value=$pass>";

echo"<input type=hidden name=tipo value=eli>";
echo"<input type=submit name=en value=E>";
echo"</form>";
echo"</td>";
echo "<td width=20>.";
echo"<form action=TipoR/bdx.php method=POST>";
$rec = $arr['TipoReceta'];
echo"<input type=hidden name=recetanueva value='$rec'>";
$desc = $arr['Descripcion'];
echo"<input type=hidden name=desc value='$desc'>";
echo"<input type=hidden name=fot value=".$arr['Imagen'].">";

echo"<input type=hidden name=log value=$nombre>";
echo"<input type=hidden name=log2 value=$pass>";
echo"<input type=hidden name=tipo value=act>";
echo"<input type=submit name=en value=A >";
echo"</form>";
echo"</td>";

echo "</tr>";

}
      
echo "</table></center>";


echo "<h1 align=center>Registro de tipos de receta</h1>";


echo "<form action=TipoR/recr.php method=POST enctype=multipart/form-data>";
echo "Categoria:<input type=text name=nombre1><br><br>";
echo "Descripcion:<input type=text name=desc1><br><br>";
echo "<br><br><br>";

echo "              <b>Imagen: [El nombre del los archivos NO deben tener Espacios, puede usar guion bajo][Maximo:250KB]";
echo"              </b><br><br><br>";
echo"              <input type=file name=Imagen1><br><br><BR>";


echo"<input type=hidden name=login value=$nombre>";
echo"<input type=hidden name=loginpas value=$pass>";
echo "<input type=submit name=en value=AGREGAR>";
echo "</form>";





?>