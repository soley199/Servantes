<?php
    require_once('conexion.php');
    header('Content-Type: text/html; charset=UTF-8');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>COLEGIO BILINGUE | MIGUEL DE CERVANTES SAAVEDRA</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico">

    <!-- Cargando fuentes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Cargando iconos -->
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>


    <!-- Carga de archivos css -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style type="text/css">
       body {
 background: linear-gradient( 90deg, #FFD130, #ffebcd);
}
        </style>

        <script type="text/javascript">
                $('.carousel').carousel()
        </script>
        <style type="text/css">
                .carousel {
                position: relative;
                    height: 322px;
                margin-top: 75px;
                    width: 60%;
    margin: auto;
    padding-top: 75px;

                }

                @media only screen and   (max-width : 991px){

      .carousel {
                
                    width: 100%;
     
                }
    
}
            
            
            </style>
</head>

<body class="paginas-internas">





    <section class="bienvenidos">

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
                        <li><a href="index.php">Inicio</a></li>
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
                            <a class="dropdown-item" href="Instalaciones.php">Instalaciones</a>
                            <a class="dropdown-item" href="Desarrollo.php">Desarrollo Humano</a>
                            </div>
                        </li>      
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="Images2/PRIMARIAf.gif" alt="First slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3> </h3>
          <p> </p>
        </div>
      </div>
      <div class="carousel-item  ">
        <img class="d-block img-fluid" src="Images2/Fachadasecu.jpg" alt="Second slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3> </h3>
          <p> </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="Images2/alumnossecundaria.jpg" alt="Third slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3> </h3>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>




        <div class="texto-encabezado text-xs-center fondogif">

            <div class="container">
                <h1 class="display-4">Kinder</h1>
                

            </div>

        </div>

    </section>
    <section class="ruta p-y-1 ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Proyecto

                </div>
            </div>
        </div>
    </section>
    
    
  
  
  
<div class="container letra-azulmasfuerte">
   <hr class="featurette-divider">
<section>
<?php 
            $sql='select * from secundaria_pag';

            foreach ($pdo ->query($sql) as $rs) {
              ?>
    <div class="jumbotron text-xs-center">
        <h1 class=" letra_Avenirblack"><?php echo $rs['titulo'];?></h1>
        
        
      </div>
    
    <div class="row featurette">
        <div class="col-md-7">
          
          <p class="lead justificado letra_Avenirbook"><?php echo $rs['text'];?></p>
        </div>
        <div class="col-md-5 ajusteOE">
          <img class="featurette-image img-fluid mx-auto imgRedondasinborde" src="Images2/<?php echo $rs['img'];?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          
          <p class="lead justificado letra_Avenirbook"><?php echo $rs['text_2'];?></p>
        </div>
        <div class="col-md-5 pull-md-7 ajusteOE">
          <img class="featurette-image img-fluid mx-auto imgRedondasinborde" src="Images2/<?php echo $rs['img_2'];?>" alt="Generic placeholder image">
        </div>
      </div>

      
      
 </section>

     

      <hr class="featurette-divider">
    <h2 class="text-xs-center font-weight-bold letra-azulmasfuerte letra_Avenirblack"><?php echo $rs['Taller'];?></h2>
    <br>
     
     <section class="imgenes-talleres text-xs-center">
  
<br>
     
      <div class="row">
        <div class=" col-md-4">
        <h4><?php echo $rs['Taller_1'];?></h4><a href="#"  data-toggle="modal" data-target="#Modal_Futboll"><img src="Images2/<?php echo $rs['Taller_img_1'];?>" class="imgRedonda"  alt="Servicio Desarrollo de Aplicaciones Mobiles" width="250" height="250"></a></div>
        <div class="col-md-4">
        <h4><?php echo $rs['Taller_2'];?></h4><a href="#"  data-toggle="modal" data-target="#Modal_jaz"><img src="Images2/<?php echo $rs['Taller_img_2'];?>" class="imgRedonda"  alt="Servicio Desarrollo de Aplicaciones Mobiles" width="250" height="250"></a></div>
        <div class="col-md-4">
        <h4><?php echo $rs['Taller_3'];?></h4><a href="#"  data-toggle="modal" data-target="#Modal_TEATRO"><img src="Images2/<?php echo $rs['Taller_img_2'];?>" class="imgRedonda"  alt="Servicio Desarrollo de Aplicaciones Mobiles" width="250" height="250"></a></div>

      </div>
      <br>
       
      <br>     
      
      
      

      </section>
    
    
 <!-- Modal FUTBOLL Modal_Futboll-->
    <div class="modal fade" id="Modal_Futboll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title letra_Avenirblack" id="exampleModalLabel"><?php echo $rs['Mod_Taller_1'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_1'];?></p>
        <div class="col-md-12 taller">
                <img src="Images2/<?php echo $rs['Mod_img_1'];?>" alt=""  class="img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal JAZZ Modal_jaz-->
    <div class="modal fade" id="Modal_jaz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_Taller_2'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_2'];?></p>
        <div class="col-md-12 taller">
                <img src="Images2/<?php echo $rs['Mod_img_2'];?>" alt="" class=" img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal TEATRO Modal_TEATRO-->
    <div class="modal fade" id="Modal_TEATRO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_Taller_3'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_3'];?></p>
        <div class="col-md-12 taller">
                <img src="Images2/<?php echo $rs['Mod_img_3'];?>" alt=""  class=" img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 <?php
            }
           ?>
 </div>
 
    <footer class="piedepagina p-y-1 " role="contentinfo">
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



</body>

</html>