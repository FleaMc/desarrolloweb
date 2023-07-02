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

<div class="container">
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card chat-app">
       <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                   
                                <img src="https://i.pinimg.com/236x/75/92/97/7592977364b7fe279ec0c1f002d63563.jpg" alt="avatar">
                            </a>
                            <div class="chat-about">
<?php

$us2 = $_POST['user2']; 
$us1 = $_POST['us'];
$pass = $_POST['pass'];

PRINT <<<HERE
        <h6 class="m-b-0">$us2</h6>  
        <br><br>
          <form name="formulario" method="post" action="msj.php">

             
               <input type="hidden" name=user value=$us1>  
               <input type="hidden" value=$pass name="password"> 
               <input type="submit" value="Ver Amigos" >
                </form>  
HERE;
?>                       
                
                              
                            </div>
                        </div>
                        <div class="col-lg-6 hidden-sm text-right">
                           
                        </div>
                    </div>
                </div>
                    <div class="chat-history">
    
                         <ul class="m-b-0">
<?php
 $servername = "localhost";
$database = "id19535325_2030178mcg";
$username = "id19535325_2030178umcg";
$password = ")a6M_qRRZ800X9)>";
$c = mysqli_connect($servername, $username, $password, $database) or die ("Error en la coceccion");
mysqli_select_db($c,$database);
$sql="select * from Mensaje ";
$r=mysqli_query($c,$sql); 

$us1 = $_POST['usuario'];

$use2 = $_POST['user2'];


while ($arr=mysqli_fetch_array($r))
      {
      $envia = $arr['Envia']; 
      $recibe = $arr['Recibe'];
      $mensaje = $arr['Mensaje'];
 
if($us1==$envia && $recibe==$use2 ){
     
PRINT <<<HERE
 
                   
                        <li class="clearfix">
                            <div class="message-data text-right">
                                
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgej5zqHqE7bhBqmkTGXbs7Uu2TpJ28QxWCBTOMnqb0h9qqKukeVUk0yuv5_ny1lso3Mg&usqp=CAU">
                            </div>
                            <div class="message other-message float-right">$mensaje</div>
                        </li>
        
HERE;
}else if($use2==$envia && $us1==$recibe ){
   
PRINT <<<HERE
	    
            
   <li class="clearfix">
                            <div class="message-data">
                               
                            </div>
                            <div class="message my-message">$mensaje</div>                                    
                        </li>   
         
HERE;
}
}

PRINT <<<HERE
</ul>
</div>
<form name="formulario" method="post" action="enviado.php">
 <div class="chat-message clearfix">
                    <div class="input-group mb-0">
                        <div class="input-group-prepend">
                             
                        </div>
                         
                    
                     <input type="hidden" name=usuario value=$us1> 
                     <input type="hidden" name=user2 value=$use2>
                      <input type="hidden" name=pass value=$pass> 
                        <input type="text" name=mensaje class="form-control" placeholder="Mensaje">   <input type=submit value="Enviar">
  </div>
  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




HERE;
?>
 


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
