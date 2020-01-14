<?php 
require 'seguridad.php';
session_start();
 ?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

    </head>

    <body class="body_home">


        <button class="boton_personalizado" type="submit" id="comenzar">COMENZAR</button>

        <div id="contenido"></div>

        <script type="text/javascript" src="vendor/jquery/jquery.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('#comenzar').on("click", function(){
                    $('#comenzar').animate({
                        opacity: 0
                    }, 1000     );
                    $('#comenzar').hide(1);
                });
            });
        </script>
        <script type="text/javascript">
            $("#contenido").hide()
            $(document).ready(function() {
                $('#comenzar').on("click", function() {
                    $('#contenido').load('crearpost.php #crearpost');
                    $('#contenido').fadeIn(1200);
                });
            });
        </script>                                                   

    </body>

    </html>