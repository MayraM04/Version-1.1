<?php
include ("funciones.php");
?>

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
        
        
        
        #links:hover { background-color: white;}
        
  
        
    .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #ffffff;
  }
        
        .carousel-indicators {
  bottom:-50px;
}
  .carousel-indicators li {
      border-color: black;
  }
  .carousel-indicators li.active {
      background-color: black;
  }    
        
   p, h2, h3{
        font-family:"Roboto", sans-serif;
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
    
<?php navbar();?>
       
        
    
    
  
    
   <section class="services bg-primary">
        <div class="container animated fadeInDown">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2 style="margin-top:70px;"><span class="fa-stack fa-1x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                        <strong>Objetivo</strong></h2>
                    <hr class="big">
                    <div class="row">
                        <div class=" col-sm-12">
                            <div class="service-item">
                                
                                <h4>
                                   Poder llegar a difundir la importancia  de consumir un agua saludable y de muy alta calidad haciéndolo accesible a la comunidad para brindar salud y vida a nuestros consumidores.  <br> <br>                            
                                   
                                </h4>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
    
    <div class="container-fluid" style="background-attachment:fixed; background-repeat:no-repeat;  background: url(vision.jpeg) no-repeat center center fixed; background-size: cover;padding: 60px 60px;">
    <div class="container bg-primary animated fadeInLeft"  style="border-radius:10px; opacity:0.9;">
  <div class="row">
    
      <div class="col-sm-6">
        <h4 style="text-align:center; font-weight:bold;">MISIÓN</h4><h4>Buscamos implementar un estado de vida saludable a los consumidores de nuestro producto por medio de HVIOZO como una empresa especializada 100% en agua.
</h4><br/>
      
      </div>
      <div class="col-sm-6">
          <h4 style="text-align:center; font-weight:bold;">VISIÓN</h4><h4>Buscamos brindar con respeto, tolerancia y aprecio desde nuestros trabajadores hasta nuestros consumidores el mejor servicio con la más alta calidad haciéndolo económicamente accesible.

          </h4></div></div>
      
      

      

        
    </div>
  </div>
    
     <div class="container-fluid text-center" style="padding: 10px 30px; background-color:#f6f6f6;">
    
  <div id="myCarousel" class="carousel slide slideanim text-center"  style="margin-top:20px;margin-bottom:40px;"data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin-top:50px;">
      <li data-target="#myCarousel" data-slide-to="0" style="margin-top:50px;" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="margin-top:50px;"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="margin-top:50px;"></li>
      <li data-target="#myCarousel" data-slide-to="3" style="margin-top:50px;"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 style="color:black;">"Excelentes productos y una agua alcalina de buena calidad"<br><span style="font-style:normal;  font-weight:bold;">Andres R.</span></h4>
      </div>
      <div class="item">
        <h4 style="color:black;">"¡El mejor servicio a cliente que un lugar pueda ofrecer!"<br><span style="font-style:normal;  font-weight:bold;">María P.</span></h4>
      </div>
      <div class="item">
        <h4 style="color:black;">"La gente del establecimiento muy amable con sus clientes."<br><span style="font-style:normal;  font-weight:bold;">Roberto A.</span></h4>
      </div>
        
        <div class="item">
        <h4 style="color:black;">"Buen precio, excelente agua."<br><span style="font-style:normal;  font-weight:bold;">Alicia F.</span></h4>
      </div>
        
       
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
   
            
        
    
    
    
<?php footer();?>

    
</body>
</html>