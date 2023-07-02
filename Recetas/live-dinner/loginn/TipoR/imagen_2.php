<html>
<body>
<?php
////////////////////////////////////////////////////////////////////////////////
$ruta="imagenes/";
$archivo1=$_FILES['Imagen1']['tmp_name'];

$nombrearchivo1=$_FILES['Imagen1']['name'];

move_uploaded_file($archivo1,$ruta.$nombrearchivo1);

///////////////////////////////////////////////////////////////////////

/////unlink("../imagenes/".$_POST['imagen1x']);

echo "<img src={$ruta}{$nombrearchivo1} width=800><br><br>";

?>

</body>

</html>