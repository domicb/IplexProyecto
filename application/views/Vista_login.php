<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iplex.li</title>
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>Assets/css/Aspecto.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br>
<div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> 
                    <img src="<?=base_url()?>Assets/logo.png" alt="" class="img-responsive" class="img-thumbnail">
                </div>
            </div>    
<br><!-- formulario d entrada y login -->
        <div class="row">
                <div class="col-lg-6 col-xs-6 col-md-6 col-sm-12">
                    <br><br>
                    <center><FONT size="+3" color="white" face="Arial" ><b> CÓDIGO DE INVITACIÓN </b></FONT><br><br>
                        <font size="+1" color="white">Si tiene código de invitación, puede acceder y crear su cuenta.</font><br>
                    <br>                 
                
                <!-- input código-->

                    <form action="<?=base_url()?>index.php/Invitacion/" method="POST">
                        <input id="cod" name="cod" type="text" placeholder="Escriba aquí su código de invitación." required/>
                        <input id="bot" type="submit" value="ACEPTAR"/>
                    </form>
                   </center>
                </div>
                 <div class="clearfix visible-xs"></div>
            <div class="col-lg-6 col-xs-4 col-md-6 col-sm-4" id="cuadro"> 
             <center>
               <p id="enti"><font size="+3" face="Arial"><b> ACCEDER </b></font></p>
            		<form action="<?=base_url()?>index.php/Login/" method="POST" >
            			<p id="entre">Introduzca los datos asociados a su cuenta</p>
    	                <input type="text" class="formu" name="username" placeholder="Introduce su nombre*" required/><br>
    	                <input type="text" class="formu" name="password" placeholder="Introduce su contraseña*"/>
                		<div class="g-recaptcha" id="capt" data-sitekey="6LcRJB8TAAAAAIXL9A6YeIujJHPEg59HMJXJsxZY"></div>
                        <input type="submit" value="Pulse para Identificarse" id="btn-login">
        	        </form>
            </div> </center>
        </div>   
</div><!--CIERRE CONTAINER--> 
 <script type="text/javascript" src="<?=base_url()?>Assets/js/jquery2.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">

   $(function(){

        $("#cod").focus(function()
        {
            $("#bot").css("background-color", "red");
           
        });
        $("#dos").blur(function()
        {
            $("#dos").css("background-color", "white");
        });
        /*boton aceptar*/
        $("#bot").hover(function()
        {
            $("#bot").css("background-color", "red");
        },
        function()
        {
         $("#bot").css("background-color", "#FF5E65");
        }

        );
        /*boton login*/
        $("#btn-login").hover(function()
        {
            $("#btn-login").css("background-color","#483D8B");
        },
        function()
        {
             $("#btn-login").css("background-color","rgb(54, 62, 122)");
        }

        );        
     
    });
    </script>
</body>
</html>
