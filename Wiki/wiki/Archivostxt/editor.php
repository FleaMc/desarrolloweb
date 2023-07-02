<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Editor de txt</title>
</head>

<body>
<?php
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$autr = $_POST['autor1'];
$fech = $_POST['fecha1'];
$rutatem = $_POST['arch1'];
$rut =$rutatem;
$fn = $rut;

?>

<form action=../ini.php method=POST>
              <input type=hidden name=login value= <?php echo "$nombre" ?>>
                 <input type=hidden name=loginpass value= <?php echo "$pass" ?>>   
             <input type=submit name=en value=Volver>
               </form>

<form action=listo.php method=POST>

<input type=hidden name=arch1 value= <?php echo "$fn" ?> >

<div style="width:950px; text-align: center; margin: auto; background-color: #F0F0F0; border: 1px solid #B3B9D5; border-color: #B3B9D5; padding: 15px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #717CB0; font-size: 14px;">
Editor de txt,    Autor: <?php echo "$autr , Fecha $fech" ?> <strong>


             
            
</strong><br /><br />
<textarea rows=25 cols=110 name=content> <?php readfile($fn); ?>  </textarea>
<br />
<input type=hidden name=login value= <?php echo "$nombre" ?>>
<input type=hidden name=loginpass value= <?php echo "$pass" ?>>
<input type=hidden name=autor1 value= <?php echo "$autr" ?>>
<input type=hidden name=fecha1 value= <?php echo "$fech" ?>>
 <br /><input type=submit value=  Guardar los cambios  >

</form>

<br />

</div>
</body>
</html>
