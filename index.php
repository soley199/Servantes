<?php 
    require_once('conexion.php');
    header('Content-Type: text/html; charset=UTF-8');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>COLEGIO BILINGUE | MIGUEL DE CERVANTES SAAVEDRA</title>
    <!-- Required meta tags always come first -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   <link rel="shortcut icon" type="image/x-icon" href="logo.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    
    
    <!--Carucel en 3D -->
     <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/slicebox.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

    


    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    
    
    
    <!-- Script facebook LINETIME -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
    <section class="bienvenidos letra_Avenirbook">

        <header class="encabezado navbar-fixed-top" role="banner" id="encabezado">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="Images2/logo_blanco.png" alt="Logo del sitio">
                </a>

                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true" hidden="hidden"></i>
                </button>
                <button type="button" class="boton-menu hidden-md-up" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i></button>

                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>

                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">¿Quienes Somos?</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta Educativa</a>
                            <div class="dropdown-menu" >
                            <a class="dropdown-item" href="Kinder.php">Kinder</a>
                            <a class="dropdown-item" href="Primaria.php">Primaria</a>
                            <a class="dropdown-item" href="Secundaria.php">Secundaria</a>
                            </div>
                        </li> 
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyecto Educativo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="servicios.php">Servicio</a>
                            <a class="dropdown-item" href="Desarrollo.php">Desarrollo Humano</a>
                            </div>
                        </li> 
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        

            <section class="index">
                
            
               <article class="caja1"><img src="Images2/logo.png"  alt=""></article>



               <article class="caja2">

               <div class="wrapper">

                <ul id="sb-slider" class="sb-slider">
            <?php 
            $sql='select * from slider_index';

            foreach ($pdo ->query($sql) as $rs) {
              ?>
                            <li>
                        <a href="Kinder.php" target="_blank"><img src="Images2/<?php echo $rs['Imagen'];  ?>" alt="Kinder"/></a>
                        <div class="sb-description">
                            <h3 class="<?php echo $rs['Tipo_Letra'];  ?>"><?php echo $rs['slider_text'];  ?></h3>
                        </div>
                    </li>

          <?php
            }
           ?>
                    
                </ul>

                <div id="shadow" class="shadow"></div>

                <div id="nav-arrows" class="nav-arrows">
                    <a href="#">Next</a>
                    <a href="#">Previous</a>
                </div>
                <div id="nav-options" class="nav-options">
                    <span id="navPlay">Play</span>
                    <span id="navPause">Pause</span>
                </div>

            </div>
               
    </article>
                
        
                </section>
                
    
                </div>
            
        </div>
        
    </section>
    <section class="agencia p-y-1 letra_Avenirbook" id="agencia">

        <div class="container">


            <div class="row">

                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                     <?php 
            $sql='select * from quines_somos_index';

            foreach ($pdo ->query($sql) as $rs) {
                
              ?>

                        <h2 class="h3 text-xs-center text-md-left font-weight-bold letra-azulfuerte"><?php echo $rs['Titulo'];  ?></h2>
                        <p class="letra-azulfuerte"><?php echo $rs['Parrafo'];  ?></p>
                </div>
                <div class="col-md-5 col-xl-3 wow bounceIn" data-wow-delay=".3s">
                    <img src="Images2/<?php echo $rs['Imagen'];  ?>"  alt="La agencia">
                    <?php 
            }
            
           ?>
                </div>
            </div>
        </div>

    </section>
    <section class="tu-mejor-eleccion p-y-1">
        <div class="container letra_Avenirbook">
                <?php 
            $sql='select * from mejor_eleccion';

            foreach ($pdo ->query($sql) as $rs) {

              ?>
                            
                    <h2 class="h3 text-xs-center font-weight-bold letra-azul"><?php echo $rs['Titulo'];  ?></h2>
            <p class="text-xs-center letra-azul">
                <?php echo $rs['Subtitulo'];  ?>
            </p>
                        

          
            <div class="row">
                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <!--<i class="fa  fa-calendar" aria-hidden="true"></i>-->
                        <a href="https://www.uno-internacional.com/mx/unoi/pago/"><img src="Images2/<?php echo $rs['1_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['1_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul "><?php echo $rs['1_text'];  ?></p>
                        </div>
                    </li>

                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <!--<i class="fa  fa-calendar" aria-hidden="true"></i>-->
                        <a href="#"><img src="Images2/<?php echo $rs['1.2_img'];  ?>" width="90" height="90" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['1.2_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul "><?php echo $rs['1.2_text'];  ?></p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <a href="#"><img src="Images2/<?php echo $rs['2_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['2_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['2_text'];  ?></p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <a href="#"><img src="Images2/<?php echo $rs['3_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['3_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['3_text'];  ?></p>
                        </div>
                    </li>
                </ul>

                <div class="hidden-md-down col-lg-4">
                    <img src="Images2/<?php echo $rs['Img_centro']; ?>" class="mundo_ajuste" width="320" height="300" alt="Servantes">
                    
                </div>

                <ul class="col-xs-6 col-lg-4 text-xs-center text-lg-right">
                    <li class="wow zoomIn orden" data-wow-duration=".3s" data-wow-delay=".3s">
                        <!--<i class="fa  fa-calendar" aria-hidden="true"></i>-->
                        <a href="#"><img src="Images2/<?php echo $rs['4_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['4_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['4_text'];  ?></p>
                        </div>
                    </li>
                    <li class="wow zoomIn orden" data-wow-duration=".3s" data-wow-delay=".3s">
                        <!--<i class="fa  fa-calendar" aria-hidden="true"></i>-->
                        <a href="#"><img src="Images2/<?php echo $rs['4.1_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['4.1_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['4.1_text'];  ?></p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <a href="#"><img src="Images2/<?php echo $rs['5_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['5_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['5_text'];  ?></p>
                        </div>
                    </li>
                    <li class="wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                        <a href="#"><img src="Images2/<?php echo $rs['6_img'];  ?>" width="100" height="100" alt="UNO"></a>
                        <div class="contenedor-eleccion">
                            <h4 class="letra-azul"><?php echo $rs['6_titulo'];  ?></h4>
                            <p class="hidden-md-down letra-azul"><?php echo $rs['6_text'];  ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
            }
           ?>
        </div>
    </section>

    <main class="servicios p-y-1 letra_Avenirbook">
        <div class="container">
        <?php 
            $sql='select * from servicios_index';

            foreach ($pdo ->query($sql) as $rs) {
              ?>
            <h2 class="text-xs-center font-weight-bold letra-azulmasfuerte"><?php echo $rs['Titulo'];  ?></h2>


            <div class="row">
                 <article class="col-md-4 wow bounceInRight" data-wow-delay=".1s">
                    <img src="Images2/<?php echo $rs['1_img'];  ?>" alt="TRANSPORTE ESCOLAR">
                    <h3><a href="servicios.php"><?php echo $rs['1_titulo'];  ?></a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['1_text'];  ?></p>
                    
                </article>
                
                <article class="col-md-4 wow bounceInUp" data-wow-delay=".3s">
                    <img src="Images2/<?php echo $rs['2_img'];  ?>" alt="SERVICIO DE COMEDOR">
                    <h3><a href="servicios.php"><?php echo $rs['2_titulo'];  ?></a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['2_text'];  ?></p>
                    
                </article>
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="Images2/<?php echo $rs['3_img'];  ?>" alt="Talleres">
                    <h3><a href="servicios.php"> <?php echo $rs['3_titulo'];  ?> </a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['3_text'];  ?></p>
                    

                </article>

            </div>
            <div class="row">
                <article class="col-md-4 wow bounceInRight" data-wow-delay=".1s">
                    <img src="Images2/<?php echo $rs['4_img'];  ?>" alt="Servicio Marketing y publicidad Movil">
                    <h3><a href="servicios.php"><?php echo $rs['4_titulo'];  ?></a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['4_text'];  ?></p>
                    
                </article>
                
                <article class="col-md-4 wow bounceInUp" data-wow-delay=".3s">
                    <img src="Images2/<?php echo $rs['5_img'];  ?>" alt="Servicio Consultoría Tecnológica">
                    <h3><a href="servicios.php"><?php echo $rs['5_titulo'];  ?></a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['5_text'];  ?></p>
                    
                </article>
                <article class="col-md-4 wow bounceInLeft" data-wow-delay=".3s">
                    <img src="Images2/<?php echo $rs['6_img'];  ?>" alt="Servicio Desarrollo de Aplicaciones Mobiles">
                    <h3><a href="servicios.php"><?php echo $rs['6_titulo'];  ?> </a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['6_text'];  ?></p>
                   

                </article>

               

            </div>
                <?php
            }
              ?>


        </div>
    </main>
    
    <section class="Redes-socialesindex">
      <div class="container">
               
         <div class="row">
          <div class="col-md-6" >
              <article class="item-des">
                <div class="fb-page" data-href="https://www.facebook.com/Colegio-Biling%C3%BCe-Miguel-de-Cervantes-Saavedra-170078646452126/" data-tabs="timeline" data-width="300" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Colegio-Biling%C3%BCe-Miguel-de-Cervantes-Saavedra-170078646452126/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Colegio-Biling%C3%BCe-Miguel-de-Cervantes-Saavedra-170078646452126/">Colegio Bilingüe Miguel de Cervantes Saavedra</a></blockquote></div>
              </article>
          </div>
          <div class="col-md-6" >
              <article class="item-des">
                <div>
                 <iframe width="500" height="320" src="https://www.youtube.com/embed/TmzUqJiQEeU" frameborder="0" allowfullscreen></iframe>

             </div
              </article>
          </div>
        </div><!-- /.row -->
         
          
      </div>
       

        
    </section>

    <footer class="piedepagina p-y-1" role="contentinfo">
        <div class="container">
            <p>2016 ©  Todos los derechos reservados</p>
            <ul class="redes-sociales">
                <li><a href="https://es-la.facebook.com/Colegio-Biling%C3%BCe-Miguel-de-Cervantes-Saavedra-170078646452126"><i class="fa fa-facebook" aria-hidden="true"> </i>  </a></li>
                <li><a href="https://twitter.com/colegiomcs"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                <li><a href="https://www.youtube.com/channel/UCyNA0dkabe6CJNrohAbVbCQ"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
            </ul>

        </div>

    </footer>

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <!-- Carga de archivos  JS -->

   
    


<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>






















    
        <script type="text/javascript" src="js/jquery.slicebox.js"></script>
        <script type="text/javascript">

            
            
            $(function() {
                
                var Page = (function() {

                    var $navArrows = $( '#nav-arrows' ).hide(),
                        $navOptions = $( '#nav-options' ).hide(),
                        $shadow = $( '#shadow' ).hide(),
                        slicebox = $( '#sb-slider' ).slicebox( {
                            onReady : function() {

                                $navArrows.show();
                                $navOptions.show();
                                $shadow.show();

                            },
                            orientation : 'h',
                            cuboidsCount : 3
                        } ),
                        
                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            // add navigation events
                            $navArrows.children( ':first' ).on( 'click', function() {

                                slicebox.next();
                                return false;

                            } );

                            $navArrows.children( ':last' ).on( 'click', function() {
                                
                                slicebox.previous();
                                return false;

                            } );

                            $( '#navPlay' ).on( 'click', function() {
                                
                                slicebox.play();
                                return false;

                            } );

                            $( '#navPause' ).on( 'click', function() {
                                
                                slicebox.pause();
                                return false;

                            } );

                        };

                        return { init : init };

                })();

                Page.init();

            });
        </script>



</body>

</html>
