<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/estilo2.css">
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
                    <li class="tm-nav-item "><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a></li>
                    <li class="tm-nav-item active"><a href="post.html" class="tm-nav-link">
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
            <!-- Search form -->
                      
            <div class="row tm-row">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                      <!-- Tabs Titles -->
                      <h2 class="active"> Inicio de sesion </h2>                 
                     <br><br>
                      <!-- Login Form -->
                      <form method="post" action="ini.php">
                        <input type="text" name="login" class="fadeIn second" name="user" placeholder="usuario">
                        <input type="text" name="loginpass" class="fadeIn third" name="password" placeholder="contraseña">
                        <input type="hidden" name="acceso" value="no">
                        <input type="submit" class="fadeIn fourth" value="Entrar">
                      </form> 
                    </div>
                  </div>                             
            </div>
           <br><br><br>
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