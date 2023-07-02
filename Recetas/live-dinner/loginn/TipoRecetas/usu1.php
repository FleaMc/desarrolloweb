<?php
$servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");




mysqli_select_db($c,$database);
$sql_z="select * from TipoRecetas";
$rc=mysqli_query($c,$sql_z);
echo "<center><table border=1>";

      while ($arr=mysqli_fetch_array($rc))
      {
echo "<tr>";
echo "<td width=100>" . $arr['TipoReceta'] . "</td>";
echo "<td width=100>" . $arr['Descripcion'] . "</td>";
echo "<td width=100>" . $arr['Categoria'] . "</td>";
echo "<td width=20>.";
echo"<form action=bdx.php method=POST>";

echo"<input type=hidden name=usuario2 value=".$arr['TipoReceta'].">";
echo"<input type=hidden name=desc value=".$arr['Descripcion'].">";
echo"<input type=hidden name=cat value=".$arr['Categoria'].">";
echo"<input type=hidden name=tipo value=eli>";
echo"<input type=submit name=en value=E>";
echo"</form>";
echo"</td>";

echo "<td width=20>.";
echo"<form action=bdx.php method=POST>";
echo"<input type=hidden name=usuario2 value=".$arr['TipoReceta'].">";
echo"<input type=hidden name=desc value=".$arr['Descripcion'].">";
echo"<input type=hidden name=cat value=".$arr['Categoria'].">";
echo"<input type=hidden name=tipo value=act>";
echo"<input type=submit name=en value=A >";
echo"</form>";
echo"</td>";

echo "</tr>";
      }
echo "</table></center>";

?>


<h1 align=center>Registro de Receta</h1>


<form action=recr.php method=POST>
TipoRecetas:<input type="text" name=nombre1><br><br>
Descripcion:<input type="text" name=desc><br><br>
Categoria:<input type="text" name=cat><br><br>
<input type=submit name=en value=AGREGAR>
</form>





