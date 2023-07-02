<?php

include 'conexion.php';

$rec=  $_POST["rec"]; 
$cat=  $_POST["cat"]; 
 
echo "<H1 align=center>Recetas $rec</H1>";  
echo "<div align=center>" ;
echo"<form action=recetas.php method=POST>";
echo"<input type=submit name=en value=Regresar>";
echo"<input type=hidden name=receta value='$cat'>";
echo "</form>";
echo "</div>" ;
   
    //    $mostrar = $row["Usuario"]; 
     //   if($filaus == $nombre && $filacl==$pass or $acceso=='si'){
                $sql="select * from TipoRecetas where TipoReceta='$rec'  ";
                $r=mysqli_query($c,$sql);
           
                echo "<center><table border=1>";
              echo "<tr>";
              echo "<td width=100> Ingredientes  </td>";
              echo "<td width=100>Preparacion</td>";
              echo "<td width=100>Imagen</td>";
         
              echo "</tr>";
echo "<br><br>";
     
                 while ($arr=mysqli_fetch_array($r))
      {
                echo "<tr>";
echo "<td width=100>" . $arr['Ingredientes'] . "</td>";
echo "<td width=100>" . $arr['Preparacion'] . "</td>";
$chef1= $arr['Chef']; 
if (strcmp ( $arr["Ruta_Foto"], 'imagenes/' ) == 0) 
{ 
echo  "<td width=100> No hay imagen  </td>"; 
}  else{
$ruta = $arr["Ruta_Foto"]; 
echo  "<td width=250> <img src='TipoRecetas/$ruta'   width=80%>  </td>";
}


echo "</tr>";

}



      
echo "</table></center>";


    echo "<H3 align=center>Hecha por $chef1</H3>";


?>