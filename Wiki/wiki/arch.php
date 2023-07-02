
 <?php
 
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$autor = $_POST['autor1'];

$fechaActual = date('d/m/y');

function generateRandomString($length = 10) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
} 

$nuevaReferencia = generateRandomString();
$val='.txt';
$conc = $nuevaReferencia .$val;
 echo "<div align=center> ";
           
          
                 echo"<form action=index.php method=POST>";
              
                 echo"<input type=submit name=en value=Volver>";
                 echo"</form>";
                 echo"<input type=hidden name=nombre value='$nombre'>";
                 echo"<input type=hidden name=pass value='$pass'>";
                 echo "</div>";
 PRINT <<<HERE
<h1 align=center>Crear documento</h1>
<form action=doc.php method=POST>
Titulo<input type=text name=titulo1><br><br>
Texto <br>
 <textarea name="contenido1" rows="10" cols="70"></textarea></p>

<input type=hidden name=nombre value='$nombre'>
<input type=hidden name=pass value='$pass'>
<input type=hidden name=autor1 value='$autor'>
<input type=hidden name=arch1 value='$conc'>
<input type=hidden name=fecha1 value='$fechaActual'>
<input type=submit name=en value=AGREGAR>
</form>

HERE;





 ?>