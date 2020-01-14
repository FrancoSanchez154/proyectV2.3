<?php
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
    // no logueado
$link="login.php";
}
else {
    // si logueado
    $long="si";
$link="home.php";

}
?>
<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pluton Theme by BraphBerry.com</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="images/logo-bex-nuevo3.png" width="384" height="95" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                     <!-- Main navigation -->
                     <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <?php
                            if ($long=="si") {
                                echo "<a href='salir.php'>Cerrar Session</a>";  
                            }
                            ?>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#clients">Clients</a></li>
                            <li><a href="#price">Price</a></li>
                            <li><a href="#contact">Ingresar</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>

                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Welcome to pluton theme</h2>
                        <h4>Clean & responsive</h4>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Easy management</h2>
                        <h4>Easy to use</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/Slider02.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Revolution</h2>
                        <h4>Customizable</h4>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->
        <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Have You Seen our Works?</h1>
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                </div>
                <ul class="nav nav-pills">

                    <li class="filter" data-filter="web">
                    <a value="Compartir libro" type="submit" onclick="location='<?php echo $link; ?>'">Publicar</a>
                    </li>

                </ul>
                <!-- Start details for portfolio project 1 -->
                <?php
    include 'conexion.php';
    if (isset($_GET['pagina'])){
    	$inicio = ($_GET['pagina']-1)*10;//numero de publicaciones por pag
    }else{
    	$inicio=0;
    }
    $tx="SELECT * FROM post limit 0,10";//numero de publicaciones por pag
    $query= mysqli_query ($con, $tx);
    while($data=mysqli_fetch_array($query)){
                
                echo '<div id="single-project">';
                    echo '<div id="slidingDiv" class="toggleDiv row-fluid single-project">';
                       echo '<div class="span6">';
                            // <img src="images/Portfolio01.png" alt="project 1" />
                            echo '<img class="img" src="'.$data['imagen_post'].'">';
                       echo '</div>';
                        echo '<div class="span6">';
                            echo '<div class="project-description">';
                            echo '<div class="project-title clearfix">';
                            echo    '<h3>Webste for Some Client</h3>';
                                  echo '<span class="show_hide close">';
                                        echo '<i class="icon-cancel"></i>';
                                        echo ' </span>';
                                        echo '</div>';
                                        echo '  <div class="project-info">';
                                        echo '<div>';
                                        echo '<span>Client</span>Some Client Name</div>';
                                        echo ' <div>';
                                        echo '<span>Date</span>July 2013</div>';
                                        echo ' <div>';
                                        echo '<span>Skills</span>HTML5, CSS3, JavaScript</div>';
                                        echo ' <div>';
                                        echo '<span>Link</span>http://examplecomp.com</div>';
                                echo '</div>';
                                echo '<p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>';
                                echo ' </div>';
                                echo ' </div>';
                                echo '</div>';   
    }     
                    ?>
                    <!-- End details for portfolio project 1 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <?php
                            include 'conexion.php';
                            if (isset($_GET['pagina'])){
                                $inicio = ($_GET['pagina']-1)*10;//numero de publicaciones por pag
                            }else{
                                $inicio=0;
                            }
                            $tx="SELECT * FROM post limit 0,10";//numero de publicaciones por pag
                            $query= mysqli_query ($con, $tx);
                            while($data=mysqli_fetch_array($query)){
                            
                            echo '<div class="thumbnail">';
                            echo '<img class="img"  src="'.$data['imagen_post'].'">';
                                // <img src="images/Portfolio01.png" alt="project 1">
                                echo '<a href="#single-project" class="more show_hide" rel="#slidingDiv">';
                                echo '<i class="icon-plus"></i>';
                                echo '</a>';
                                echo $data['titulo_post'];
                                echo '<p>';
                                echo $data['autor_post'];
                                echo '</p>';
                                echo '<div class="mask"></div>';
                                echo '</div>';
                            }
                                ?>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->

       
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
 </html>