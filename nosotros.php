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

<body class="paginas-internas letra_Avenirbook">
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
                        <li class="active"><a href="nosotros.php">¿Quienes Somos?</a></li>
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
        
    </section>
    
    <section class="ruta p-y-1 ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Nosotros

                </div>
            </div>
        </div>
    </section>
    <?php 
            $sql='select * from Quienes_somos_pag';

             foreach ($pdo ->query($sql) as $rs) {
              ?>
            
    <main class="servicios p-y-1">
        <div class="container letra-azulmasfuerte">
            <h2 class="text-xs-center font-weight-bold letra-azulmasfuerte"><?php echo $rs['titulo'];  ?></h2>
		            <p class="justificado">
                        <?php echo $rs['tex'];  ?>
                    </p>
                    


                   <div class=" p-y-1">     
                <div class="container">
                <div class="row">

                <div class="col-md-12 col-xl-9 wow bounceIn" data-wow-delay=".3s">
    <h2 class="h3 text-xs-center text-md-left font-weight-bold letra-azulfuerte"><?php echo $rs['titulo_2'];  ?></h2>
                    
                    <p class="letra-azulfuerte"><?php echo $rs['tex_2'];  ?></p>

                </div>
                <div class="col-md-10 col-xl-3 wow bounceIn text-xs-center" data-wow-delay=".6s">
                     <img src="Images2/<?php echo $rs['img_2'];  ?>" width="150" height="150"  alt="Servicio Marketing y publicidad Movil">
                </div>
            </div>
               </div>
                </div>
                <div class="row">
                
                <article class="col-md-6 wow bounceInRight" data-wow-delay=".6s">
                    <img src="Images2/<?php echo $rs['img_3'];  ?>" alt="Misión">
                    <h3><a href="#"  data-toggle="modal" data-target="#Modal_mision"><?php echo $rs['titulo_3'];  ?></a></h3>
                                <p class="hidden-sm-down justificado">
                                    <?php echo $rs['tex_3'];  ?>
                                </p>
                    
                </article>
                
                <article class="col-md-6 wow bounceInRight" data-wow-delay="1s">
                    <img src="Images2/<?php echo $rs['img_4'];  ?>" alt="Visión">
                    <h3><a href="#"  data-toggle="modal" data-target="#Modal_Vision"><?php echo $rs['titulo_4'];  ?></a></h3>
                    <p class="hidden-sm-down letra-azulmasfuerte justificado"><?php echo $rs['tex_4'];  ?></p>
                    
                </article>

                

            </div>
            
        </div>
    </main>
   
 
<div class="modal fade" id="Modal_mision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['titulo_3'];  ?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['tex_3'];  ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
   <!-- Modal   Vision  -->
    <div class="modal fade" id="Modal_Vision" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><?php echo $rs['titulo_4'];  ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-8">
                            <?php echo $rs['tex_4'];  ?>
                        </div>

                        <div class="col-md-4">
                           
                            </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <section class="">

             <h2 class="text-xs-center letra-azulmasfuerte valores"><?php echo $rs['Titulo_5'];  ?></h2>

                <div class="valores">
                <br>
    
                    <img src="Images2/<?php echo $rs['img'];  ?>"  alt="">

                </div>  
    </section>
    
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

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
<?php
            }
           ?>
</body>

</html>
