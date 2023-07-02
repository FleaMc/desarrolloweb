<?php

include 'conexion.php';

$sql="select * from Admin";

                $r=mysqli_query($c,$sql);
                echo "<H1>Administrador </H2 >";
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
?>

<h1 align=center>Registro de Administrador</h1>";


<form action=int12.php method=POST>
Nombre:<input type=text name=nombre1><br><br>
Usuario:<input type=text name=usuario1><br><br>
Clave:<input type=text name=clave1><br><br>
<input type=hidden name=tipo1 value=Administrador>
<input type=submit name=en value=AGREGAR>
</form>




