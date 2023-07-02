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


$query = ("SELECT * FROM UsuariosWiki");


      
if ($result = $c->query($query)) {
$pasa = 'no';
 
    while ($row = $result->fetch_assoc()) {
   
        $filaus = $row["Usuario"];
        $filacl = $row["Contraseña"];
        $autor = $row["Autor"];
        if($filaus == $nombre && $filacl==$pass  ){
          
        
                $pasa = 'si';
                $ent = 'sient';
                $sql="select * from Wiki";
                $r=mysqli_query($c,$sql);
                echo "<div align=center> ";
           
                 echo "<H1>WikiDocs</H2 >";
                 echo"<form action=index.php method=POST>";
              
                 echo"<input type=submit name=en value=Inicio>";
                 echo"</form>";
                 
                   echo"<form action=elim.php method=POST>";
                 echo"<input type=hidden name=login value=$nombre>";
                 echo"<input type=hidden name=loginpass value=$pass>";
                   echo"<input type=hidden name=autor1 value=$autor>";
                 echo"<input type=submit name=en value='Mis docs'>";
                 echo"</form>";
                 
                      echo"<form action=login.php method=POST>";
                 echo"<input type=hidden name=nombre value=$nombre>";
                 echo"<input type=hidden name=pass value=$pass>";
                 echo"<input type=submit name=en value=Login>";
                 echo"</form>";
                 echo"<form action=arch.php method=POST>";
                 echo"<input type=hidden name=nombre value=$nombre>";
                 echo"<input type=hidden name=pass value=$pass>";
                 echo"<input type=hidden name=autor1 value=$autor>";
                 echo"<input type=submit name=en value='Nuevo archivo'>";
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
echo"<form action=Archivostxt/editor.php method=POST>";
echo"<input type=hidden name=titulo1 value=".$arr['Titulo'].">";
echo"<input type=hidden name=autor1 value=".$arr['Autor'].">";
echo"<input type=hidden name=fecha1 value=".$arr['Fecha'].">";
echo"<input type=hidden name=arch1 value=$arch2>";
 echo"<input type=hidden name=nombre value=$nombre>";
echo"<input type=hidden name=pass value=$pass>";

echo"<input type=submit name=en value=Modificar >";
echo"</form>";
echo"</td>";



echo "</tr>";

}
      

            
       
    
  }
 

  }

$con ='no';
 if(strcmp($pasa, $con) === 0){  
   echo "<h1>Sin acceso</h1>";


 }
  
    
}
  
  
?>



</HTML>
