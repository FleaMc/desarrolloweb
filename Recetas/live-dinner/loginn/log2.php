<?php

include 'conexion.php';


$nombre = $_POST["login"];
$pass = $_POST["loginpas"];
$acceso = $_POST["acceso"];
$query = ("SELECT * FROM Admin");


      
if ($result = $c->query($query)) {
$pasa = 'no';
 
    while ($row = $result->fetch_assoc()) {
   
        $filaus = $row["Usuario"];
        $filacl = $row["Clave"];
        $filati = $row["Tipo"];
        $var2 = "Administrador";
        if($filaus == $nombre && $filacl==$pass or $acceso=='si'){
            if(strcmp($filati, $var2) === 0 or $acceso=='si') {
                $acceso='no';
                $pasa = 'si';
                $ent = 'sient';
                $sql="select * from Admin";
                $r=mysqli_query($c,$sql);
                echo "<div align=center> ";
                echo "<H1>Administrador </H2 >";
                 echo "<H1>Administracion de recetas</H2 >";
                 echo"<form action=tiporec.php method=POST>";
                 echo"<input type=hidden name=log value=$nombre>";
                 echo"<input type=hidden name=log2 value=$pass>";
                 echo"<input type=submit name=en value=Recetas>";
                 echo"</form>";
                 
                      echo"<br><br><form action=https://mcflea.000webhostapp.com/live-dinner/loginn/login.html method=POST>";
                 echo"<input type=hidden name=log value=$nombre>";
                 echo"<input type=hidden name=log2 value=$pass>";
                 echo"<input type=submit name=en value=Login>";
                 echo"</form>";
                
                echo "</div>";
                echo "<center><table border=1>";

echo "<br><br>";
                 while ($arr=mysqli_fetch_array($r))
      {
                echo "<tr>";
echo "<td width=100>" . $arr['Nombre'] . "</td>";
echo "<td width=100>" . $arr['Usuario'] . "</td>";
echo "<td width=100>" . $arr['Clave'] . "</td>";
echo "<td width=100>" . $arr['Tipo'] . "</td>";

echo "<td width=20>.";
echo"<form action=bdx.php method=POST>";
echo"<input type=hidden name=nombre2 value=".$arr['Nombre'].">";
echo"<input type=hidden name=usuario2 value=".$arr['Usuario'].">";
echo"<input type=hidden name=clave2 value=".$arr['Clave'].">";
echo"<input type=hidden name=tipo value=eli>";
echo"<input type=submit name=en value=E>";
echo"</form>";
echo"</td>";

echo "<td width=20>.";
echo"<form action=bdx.php method=POST>";
echo"<input type=hidden name=nombre2 value=".$arr['Nombre'].">";
echo"<input type=hidden name=usuario2 value=".$arr['Usuario'].">";
echo"<input type=hidden name=clave2 value=".$arr['Clave'].">";
echo"<input type=hidden name=tipo value=act>";
echo"<input type=submit name=en value=A >";
echo"</form>";
echo"</td>";



echo "</tr>";

}
      
echo "</table></center>";

echo "<h1 align=center>Registro de Administrador</h1>";


echo "<form action=int12.php method=POST>";
echo "Nombre:<input type=text name=nombre1><br><br>";
echo "Usuario:<input type=text name=usuario1><br><br>";
echo "Clave:<input type=text name=clave1><br><br>";
echo "<input type=hidden name=tipo1 value=Administrador>";
echo "<input type=submit name=en value=AGREGAR>";
echo "</form";

            }else if(strcmp($filati, 'Chef') === 0  && strcmp($acceso, 'si') !== 0){
                   $pasa = 'si';
                 $sql_z="select * from TipoRecetas where Chef='$nombre'";
$rc=mysqli_query($c,$sql_z);

 echo"<form action=https://mcflea.000webhostapp.com/live-dinner/loginn/login.html method=POST>";
         
                 echo"<input type=submit name=en value=Login>";
                 echo"</form>";
  
echo "<center><table border=1>";
echo "<tr>";
              echo "<td width=100> Nombre  </td>";
              echo "<td width=100>Descripcion</td>";
              echo "<td width=100>Categoria</td>";
              echo "<td width=100>Ingredientes</td>";
              echo "<td width=100>Preparacion</td>";
              echo "</tr>";
      while ($arr=mysqli_fetch_array($rc))
      {


                 
          
echo "<tr>";
echo "<td width=100>" . $arr['TipoReceta'] . "</td>";
echo "<td width=100>" . $arr['Descripcion'] . "</td>";
echo "<td width=100>" . $arr['Categoria'] . "</td>";
echo "<td width=100>" . $arr['Ingredientes'] . "</td>";
echo "<td width=250>" . $arr['Preparacion'] . "</td>";

if (strcmp ( $arr["Ruta_Foto"], 'imagenes/' ) == 0) 
{ 
echo  "<td width=100> No hay imagen  </td>"; 
}  else{
$ruta = $arr["Ruta_Foto"]; 
echo  "<td width=200> <img src='TipoRecetas/$ruta'   width=80%>  </td>";
}
 



echo "<td width=20>.";
echo"<form action=TipoRecetas/bdx.php method=POST>";
$rec = $arr['TipoReceta'];
echo"<input type=hidden name=recetanueva value='$rec'>";
echo"<input type=hidden name=desc value=".$arr['Descripcion'].">";
echo"<input type=hidden name=cat value=".$arr['Categoria'].">";
echo"<input type=hidden name=fot value=".$arr['Ruta_Foto'].">";
echo"<input type=hidden name=log value=$nombre>";
echo"<input type=hidden name=log2 value=$pass>";

echo"<input type=hidden name=tipo value=eli>";
echo"<input type=submit name=en value=E>";
echo"</form>";
echo"</td>";
echo "<td width=20>.";
echo"<form action=TipoRecetas/bdx.php method=POST>";
$rec = $arr['TipoReceta'];
echo"<input type=hidden name=recetanueva value='$rec'>";
$desc = $arr['Descripcion'];
echo"<input type=hidden name=desc value='$desc'>";
echo"<input type=hidden name=cat value=".$arr['Categoria'].">";
echo"<input type=hidden name=fot value=".$arr['Ruta_Foto'].">";

echo"<input type=hidden name=log value=$nombre>";
echo"<input type=hidden name=log2 value=$pass>";
echo"<input type=hidden name=tipo value=act>";
echo"<input type=submit name=en value=A >";
echo"</form>";
echo"</td>";

echo "</tr>";
      }
echo "</table></center>";

echo "<h1 align=center>Registro de Receta</h1>";


echo "<form action=TipoRecetas/recr.php method=POST enctype=multipart/form-data>";
echo "Recetas:<input type=text name=nombre1><br><br>";
echo "Descripcion:<input type=text name=desc1><br><br>";


echo "Ingredientes:<input style=width:300px;height:60px type=text name=ing1><br><br>";

echo "Preparacion:<input type=text  style=width:300px;height:60px name=prep1><br><br>";
echo "<select name=cat1>";
 

$carne= 'Carnes Rojas';

echo "<option value = Sopas >Sopas</option>";
echo "<option value = Aves>Aves</option>";
echo "<option value = '$carne'>Carnes Rojas</option>";
echo "<option value = Postres>Postres</option>";

 
echo "</select> ";
echo "<br><br><br>";

echo "              <b>Imagen: [El nombre del los archivos NO deben tener Espacios, puede usar guion bajo][Maximo:250KB]";
echo"              </b><br><br><br>";
echo"              <input type=file name=Imagen1><br><br><BR>";


echo"<input type=hidden name=log value=$nombre>";
echo"<input type=hidden name=log2 value=$pass>";
echo "<input type=submit name=en value=AGREGAR>";
echo "</form>";





            }
        
       
    
  }
  
  
  
  }

$con ='no';
 if(strcmp($pasa, $con) === 0){  
   echo "<h1>Sin acceso</h1>";


 }
  
    
}
  
  
?>
