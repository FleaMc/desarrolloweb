

<?php
$rutatem = $_POST['arch1'];
$rut =$rutatem;
$fn = $rut;
$aut =$_POST['autor1'];
$fec =$_POST['fecha1'];
$contenido =$_POST['content'];
$nombre = $_POST['login'];
$pass = $_POST['loginpass'];
    $content = stripslashes($_POST['content']);
    $fp = fopen($fn,"w") or die ("Error al abrir el archivo");
    fputs($fp,$content);
    fclose($fp) or die ("Error al cerrar el archivo");

echo "Edicion realizada";

PRINT <<<HERE

<form action=editor.php method=POST>
              <input type=hidden name=nombre value='$nombre'>
                 <input type=hidden name=pass value='$pass'>  
                 <input type=hidden name=arch1 value='$fn'> 
                 <input type=hidden name=autor1 value='$aut'>
                 <input type=hidden name=fecha1 value='$fec'>
             <input type=submit name=en value=Volver>
               </form>

HERE;


?>