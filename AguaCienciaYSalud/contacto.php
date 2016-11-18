<?php
include ("funciones.php")
?>

<?php

$msg  ="";
if(isset($_POST['txtNombre']) && isset($_POST['txtEmail']) && isset($_POST['txtMensaje']))
{
	require_once('phpmailer/class.phpmailer.php');
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	
	$mail             = new PHPMailer();
	
	//$body             = file_get_contents('contents.html');
	//$body             = eregi_replace("[\]",'',$body);
	
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.guimea.com";
$mail->Username = "soporte@guimea.com";
$mail->Password = "";
$mail->Port = 587; // Puerto a utilizar
	
	$mail->SetFrom('soporte@guimea.com', 'Guimea');
	
	$mail->AddReplyTo("soporte@guimea.com","Guimea");
	
	$mail->Subject    = "Contacto de GUIMEA";
	
	$mail->AltBody    = ""; // optional, comment out and test
	
		$mail->MsgHTML("<p>De: " . $_POST['txtNombre'] . "</p>
        <p>Correo:" . $_POST['txtEmail'] . "</p>
        <p>" . $_POST['txtMensaje'] . "</p>");
	
	$address = "soporte@guimea.com";
	$mail->AddAddress($address, "Guimea");
	
	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	
	if(!$mail->Send()) {
	  $msg = "Error a enviar el mensaje: " . $mail->ErrorInfo;
	} else {
	  $msg = "El mensaje fue enviado con exito";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>Contáctanos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed.css">
	
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
          $(this).addClass("visible");
        }
    });
  });
        
        
    
</script>
    
   
    
  <style>
      
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

<body style="background-color:#f6f6f6">
    <?php navbar();?>
    <div class="container-fluid" style=" padding-top:150px; padding-bottom:150px; background-attachment:fixed; background-repeat:no-repeat;  background: url(mail.jpeg) no-repeat center center fixed; background-size: cover;">
    <div class="container animated fadeInLeft" style="margin-top:10px; background-color: rgba(0,0,0,0.7); border-radius:10px;">
    <div class="row">
        <h1 style="font-family: 'Satisfy', sans-seriff; color:white; text-align:center; margin-bottom:30px;">Contacto</h1>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            
        <form action="index2.php" method="post" >
            
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="txtNombre" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="txtEmail" placeholder="Email" type="email" required>
        </div>
      
      <textarea class="form-control" id="comments" name="txtMensaje" placeholder="Mensaje..." rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
        </form>
        <div class="col-sm-2"></div>
    </div></div>
     </div> </div>
    
    <?php footer()?>

</body>

