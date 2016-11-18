<?php
include ("funciones.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Agua Ciencia y Salud</title>
   <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.png" />
      <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="path/to/jquery.loading-indicator.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="path/to/jquery.loading-indicator.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    
    <script>
    
    $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});
        
    $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("animated");
          $(this).addClass("fadeInUp");
          
        }
    });
  });
    
</script>
   
  <style>
      
       p, h2, h3{
        font-family:"Roboto", sans-serif;
      }
      h1
      {
           
          font-size: 60px;
          font-weight:100;
      }
      
        .navbar {
     background:rgba(0,0,0,0.5);
      margin-bottom: 0;
      
      z-index: 9999;
      min-height: 40px;
      border: 0;
      font-size: 12px !important;
      
      letter-spacing: 2px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
      
    .color
      {
          color:black;
      }
      
  .navbar li a, .navbar .navbar-brand {
      color: white!important;
      min-height:40px;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color:black!important;
      background-color:white!important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: blue !important;
  }
   
      
      
      html, body { overflow-x: hidden; }
</style>
    
    </head>
    
    
<body>
    <?php navbar(); ?>
    <div class="container-fluid" style="padding-top:230px; padding-bottom:230px; background-attachment:fixed; background-repeat:no-repeat;  background: url(cleanwater.jpeg) no-repeat center center fixed; background-size: cover;">
    <audio id="bflat" src="waterdrop.mp3"></audio>
        
        <div class="container animated fadeInLeft">
            <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-center" style="background-color: rgba(0,0,0,0.7); border-radius:10px; padding-bottom:10px;">  
        <h1 style="color:white; ">Conocenos...</h1>
        <hr>
        <h4 style="color:white; ">Nuestras aguas son las mas sanas del pais y aparte son alcalinas. Nuestros productos son de la mejor calidad.</h4>
            
            <div class="btn-group">
                <button type="button" class="btn btn-info">Productos</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret">
                        
                    </span>
                
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="alotropizada.php">Agua Alotropizada</a></li>
                    <li><a href="electrolitica.php">Agua Electrolítica</a></li>
                    <li><a href="plata.php">Plata Coloidal</a></li>
                    <li><a href="alcalina.php">Agua Alcalina</a></li>
                </ul>
            
            
            </div>
            <a href="contacto.php" class="btn btn-info">Contáctanos</a>     
            </div>  
        <div class="col-sm-3"></div>
        </div></div>
    
    </div>
    
     <?php footer(); ?>
    
    
</body>
</html>