<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">	


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Empieza encabezado -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/tenedor.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
						<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="about.html">Acerca de</a></li>

						</li>
	
					
						<li class="button_user"><a class="button active" href="https://mcflea.000webhostapp.com/live-dinner/loginn/login.html">Login</a><a class="button" href="https://mcflea.000webhostapp.com/live-dinner/loginn/registro.html">Registrarse</a></li>
			
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Termina encabezado -->


<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Menú del Día</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->


 <?php
 $servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
mysqli_select_db($c,$database);
 $sql="select * from TiposR";
 $r=mysqli_query($c,$sql);
 
PRINT <<<HERE
       <div class="gallery-box">;
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h1 class="w3-white"  align="center">
					
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
HERE;
 while ($arr=mysqli_fetch_array($r))
      {
	$ruta = $arr["Imagen"]; 

/*código php... */

		PRINT <<<HERE
					<div class="col-sm-12 col-md-4 col-lg-4" align="center">
					     	<br><br><br><br>
					     	<form action=loginn/recetas.php method=POST>
							 <input type="submit" class="btn btn-lg btn-circle btn-outline-new-white" value='$arr[TipoReceta]'>
							 
							 <input type=hidden  value='$arr[TipoReceta]' name=receta>
                             </form>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						    <br><br><br><br>
						
						    <h3 align="center">$arr[Descripcion]</h3>
						
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox">
					
                         
							<img class="img-fluid" src='loginn/TipoR/$ruta' alt="Gallery Images">
						</a>
						<br><br>
					</div>
				
HERE;

        

 



}
      



  ?>

  
				</div>
			</div>
		</div>
	</div>

  

	<!-- Empieza pie de pàgina -->
	<footer class="footer-area bg-f">
	
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Restaurante</a> Design By : 
					<a href="https://html.design/">Michael</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!--Termina pie de pagina -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>


