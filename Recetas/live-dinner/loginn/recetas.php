<?php

include 'conexion.php';

$cat=  $_POST["receta"]; 

 
echo "<H1 align=center>Recetas categoria: $cat</H1>";  
echo "<div align=center>" ;
echo"<form action=../in.php method=POST>";
echo"<input type=submit name=en value=Regresar>";
echo "</form>";
echo "</div>" ;
    //    $mostrar = $row["Usuario"]; 
     //   if($filaus == $nombre && $filacl==$pass or $acceso=='si'){
                $sql="select * from TipoRecetas where Categoria='$cat'  ";
                $r=mysqli_query($c,$sql);
               
                echo "<center><table border=1>";

echo "<br><br>";
     
                 while ($arr=mysqli_fetch_array($r))
      {
                echo "<tr>";
echo "<td width=100>" . $arr['TipoReceta'] . "</td>";
echo "<td width=100>" . $arr['Descripcion'] . "</td>";
if (strcmp ( $arr["Ruta_Foto"], 'imagenes/' ) == 0) 
{ 
echo  "<td width=100> No hay imagen  </td>"; 
}  else{
$ruta = $arr["Ruta_Foto"]; 
echo  "<td width=200> <img src='TipoRecetas/$ruta'   width=80%>  </td>";
}


echo "<td width=20>.";
echo"<form action=ingredientes.php method=POST>";
$rec = $arr['TipoReceta'];
echo"<input type=hidden name=rec value='$rec'>";
echo"<input type=hidden name=cat value='$cat'>";
echo"<input type=submit name=en value=Ver>";
echo"</form>";
echo"</td>";



echo "</tr>";

}
      
echo "</table></center>";





?>