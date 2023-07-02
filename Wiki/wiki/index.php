<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">WikiDocs</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a></li>
                    <li class="tm-nav-item"><a href="login.php" class="tm-nav-link">
                        <i class="fas fa-user-circle"></i>
                        Logueo
                    </a></li>
                    <li class="tm-nav-item"><a href="registro.html" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Registrarse
                    </a></li>
                   
                </ul>
            </nav>
           
            <p class="tm-mb-80 pr-5 text-white">
                Bienvenido a la wiki
            </p>
        </div>
    </header>
<div class="container-fluid">
        <main class="tm-main">
                   <div class="row tm-row">
            <!-- Search form -->

 
 <?php 
  
  
  include 'conexion.php';
$ruta='Archivostxt/';

     $sql="select * from Wiki";
     
     $r=mysqli_query($c,$sql);
 
     while ($arr=mysqli_fetch_array($r))
         {
          $titulo = $arr["Titulo"]; 
           
          $autor = $arr["Autor"]; 
          $fecha = $arr["Fecha"]; 
          $archivo = $arr["Archivo"]; 
         
          $conc=$ruta.$archivo;
   
 ?>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <H3><?php   echo "$titulo" ?></H3>              

 <p class=tm-pt-30><?php require $conc ?></p> 
    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary"></span>
                        <span class="tm-color-primary"><?php echo " $fecha" ?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                     
                        <span><?php   echo "por $autor" ?></span>
                    </div>
                </article>  
        
           
   <?php      }  ?>

  </div>
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
   
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Ing. Michael Cabrera Garcia
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>