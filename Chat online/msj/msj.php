<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>chat app - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <?php
        $paso='no';
 $servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
mysqli_select_db($c,$database);




 
$sql2="select * from UsuariosM";
$r2=mysqli_query($c,$sql2); 

 
$us = $_POST["user"];
$pass = $_POST["password"];

while ($arr2=mysqli_fetch_array($r2))
      { 
        $filaus = $arr2["Usuario"];
        $filacl = $arr2["Clave"];
        if($filaus == $us && $filacl==$pass){
            
       $paso='si';
 
        }  }
if($paso=='si'){        
 

PRINT <<<HERE

<div align="center">
<div class="container">
<div class="row clearfix">
    <div class="col-lg-12">
           
            <div id="plist" class="people-list">
               
                <div class="input-group">
                    <div class="input-group-prepend">
                      
                  <form name="formulario" method="post" action="añadir.php">
                    
                     <input type="hidden" name=usuario value=$us> 
                     <input type="hidden" name=pass value=$pass>
                   <input type="submit" value="Añadir amigo">
                    </form>
                    <form name="formulario" method="post" action="elim.php">
                    
                     <input type="hidden" name=usuario value=$us>  
                     
                   <input type="submit" value="Eliminar cuenta">    
                      </form>   
                      <form name="formulario" method="post" action="login.html">
                    
                      
                     
                   <input type="submit" value="Login">    
                      </form>  
                    </div>
                   
                </div>
           
                <ul class="list-unstyled chat-list mt-2 mb-0"> 




HERE;



}
 



?>

 

        
        <?php
        $paso='no';
 $servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
mysqli_select_db($c,$database);

$us = $_POST["user"];
$sql="select * from Amistad";


$r=mysqli_query($c,$sql); 
 
$sql2="select * from UsuariosM";
$r2=mysqli_query($c,$sql2); 

 

$pass = $_POST["password"];

while ($arr2=mysqli_fetch_array($r2))
      { 
        $filaus = $arr2["Usuario"];
        $filacl = $arr2["Clave"];
        if($filaus == $us && $filacl==$pass){
            
       $paso='si';
 
        }  }
if($paso=='si'){        
 
while ($arr=mysqli_fetch_array($r))
      {
    $am1 = $arr["Usuario1"];      
	$us2 = $arr["Usuario2"]; 
	if($am1==$us){
 
    
PRINT <<<HERE
 <form name="formulario" method="post" action="c.php">
                    <li class="clearfix">
                        <img src="https://cdn-icons-png.flaticon.com/512/3171/3171065.png" alt="avatar">
                        <div class="about">
                            
                            
                            <div class="name">$us2</div>
                          
                            
                           
                        </div>
                       
                   <input type="hidden" name=us value=$us>  
                   <input type="hidden" name=user2 value=$us2> 
                   <input type="hidden" name=pass value=$pass> 
                   <input type="hidden" name=usuario value=$am1>      
                   <input type="submit" value="Ver">
                    </li>
                 </form>
                          
                          




HERE;

}else if($us==$us2){
     
PRINT <<<HERE
 <form name="formulario" method="post" action="c.php">
                    <li class="clearfix">
                        <img src="https://cdn-icons-png.flaticon.com/512/3171/3171065.png" alt="avatar">
                        <div class="about">
         
                            
                            <div class="name">$am1</div>
                          
                            
                           
                        </div>
                       
                     <input type="hidden" name=us value=$us>   
                   <input type="hidden" name=usuario value=$us2> 
                   <input type="hidden" name=pass value=$pass> 
                   <input type="hidden" name=user2 value=$am1>      
                   <input type="submit" value="Ver">
                    </li>
                 </form>                 
                        

HERE;

}
}
}else{
  echo "<br><br><br>";    
  echo "<H1 align=center>No existe el usuario </H1>";
}
 



?>


        
                   

  </ul>
</div>
           

</div>
</div>
</div>

 
<style type="text/css">
body{
    background-color: #f4f7f6;
    margin-top:20px;
}

.chat-app .people-list {
    width: 40px;
    position: relative;
    left: 0px;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 100px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}

.chat .chat-history .message-data {
    margin-bottom: 15px
}

.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}
</style>

<script type="text/javascript">

</script>
</body>
</html>

<!--
------------------

este es la division del chat 

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}
-->