<?php

function navbar()
{
    echo '<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#">Logo Agua</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        
         
       
      <ul class="nav navbar-nav navbar-right">
      <li onclick="document.getElementById("bflat").play()"><a href="index.php" onclick="document.getElementById("bflat").play()">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:rgba(0,0,0,0.7)">
          <li class="color"><a class="color" href="alotropizada.php">Agua Alotropizada</a></li>
          <li><a style="color:black;" href="electrolitica.php">Agua Ácida Electrolítica</a></li>
          <li><a style="color:black;" href="plata.php">Plata Coloidal</a></li>
          <li><a style="color:black;" href="alcalina.php">Agua Alcalina</a></li>
        </ul>
      </li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>';
    
}
    

function footer()
{
    echo'<section class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h4>Mas información...</h4>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item slideanim">
                                <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-phone fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Telefono:</strong> <br>                                
                                   
                                </h4>
                                <p>
                                <strong>Sucursal Queretaro:<strong><br>
                                 + 52 1 (442) 181 9596<br><br>
                                 <strong>Matriz Zapopan, Jalisco:</strong><br>
                                    0133 3125 1903<br>
                                    045 3313 222 416<br>    
                                </p>
                                
                                
                                
                               
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item slideanim">
                                <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-home fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Dirección:</strong>
                                </h4>
                                <p style="text-align:none;"> 
                                Protón #1116 <br>
                                Colonia Mirador del Sol<br>
                                Codigo Postal: 45054<br>
                                Zapopan, Jalisco<br>
                                
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item slideanim">
                                <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Correo:</strong> <br>                                
                                  
                                </h4>
                                <p>
                             Queretaro:<strong> silviaperalesg@yahoo.com.mx</strong><br>
                             Guadalajara: <strong> hviozo@hotmail.com</strong>
                                
                                </p>
                                <img class="img-responsive" href="http://www.guimea.com" src="AdLogos.png" style=" margin: 0 auto; height:40px; width:50px;"><br>
                                <p>Powered by <a style="color:white; text-decoration:underline;" href="http://www.guimea.com" target="_blank">Guimea</a></p>
                               
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
    </section>';
    
}

?>