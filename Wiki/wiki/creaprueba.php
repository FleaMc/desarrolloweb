
<?php

$contenido = 'prueba de video';
$archivo = fopen('Archivostxt/archivo.txt','a');
fputs($archivo,$contenido);
fclose($archivo);




?>