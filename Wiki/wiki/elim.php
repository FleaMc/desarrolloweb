<HTML>


<HEAD>
    
<link rel="stylesheet" href="css/style.css">   
    
    
</HEAD>


<BODY>

</BODY>


<?php

include 'conexion.php';


$nombre = $_POST['login'];
$pass = $_POST['loginpass'];
$autor = $_POST['autor1'];

$query = ("SELECT * FROM UsuariosWiki");


      
                $sql="select * from Wiki where Usuario='$nombre'";
                $r=mysqli_query($c,$sql);
                echo "<div align=center> ";
           
                 echo "<H1>WikiDocs</H2 >";
                
                 
                   echo"<form action=ini.php method=POST>";
                 echo"<input type=hidden name=login value=$nombre>";
                 echo"<input type=hidden name=loginpass value=$pass>";
                 
                 echo"<input type=submit name=en value='Volver'>";
                 echo"</form>";
                 
               
                
                echo "</div>";
                echo "<center><table border=1>";

echo "<br><br>";
                 while ($arr=mysqli_fetch_array($r))
      {
                echo "<tr>";
    echo "<td width=100>" . $arr['Titulo'] . "</td>";
echo "<td width=100>" . $arr['Autor'] . "</td>";
echo "<td width=100>" . $arr['Fecha'] . "</td>";
$arch2 = $arr['Archivo'];



echo "<td width=20>.";
echo"<form action=eliminado.php method=POST>";
echo"<input type=hidden name=titulo1 value=".$arr['Titulo'].">";
echo"<input type=hidden name=autor1 value=".$arr['Autor'].">";
echo"<input type=hidden name=fecha1 value=".$arr['Fecha'].">";
echo"<input type=hidden name=arch1 value=$arch2>";
 echo"<input type=hidden name=nombre value=$nombre>";
echo"<input type=hidden name=pass value=$pass>";

echo"<input type=submit name=en value=Eliminar >";
echo"</form>";
echo"</td>";



echo "</tr>";

}
      

            
       




  
  
?>



</HTML>
