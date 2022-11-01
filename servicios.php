<?php 
require_once('conexion.php');
    header('Content-Type: text/html; charset=UTF-8');

        if(isset($_GET['errorpa'])){
            echo '<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                        <strong>Warning!</strong> <br>Email o Contraseña Incorrecta.
                  </div>';
        }
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
   
    <!-- Cargando fuentes-->
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
                            <a class="dropdown-item" href="servicios.php">Servicios</a>
                            <a class="dropdown-item" href="Instalaciones.php">Instalaciones</a>
                            <a class="dropdown-item" href="Desarrollo.php">Desarrollo Humano</a>
                            </div>
                        </li> 
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>

            </div>
        </header>


        <section>
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
      <div class="carousel-item data-interval="1000" ">
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

    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Servicios

                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1 lista-servicios">
    <?php 
            $sql='select * from servicio_pag';

            foreach ($pdo ->query($sql) as $rs) {
              ?>
        <div class="container">
            <div class="row">

                <div class="col-md-4" >
                    <article class="item-servicios">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_1'];?>" width="175" height="175" alt="TRANSPORTE ESCOLAR"></i><br>
                        
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio_transporte"><?php echo $rs['titulo_1'];?></a>

                    </article>
                </div>


                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_2'];?>" width="175" height="175" alt="SERVICIO DE COMEDOR"></i><br>
                        
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio_Comedor"><?php echo $rs['titulo_2'];?></a>

                    </article>
                </div>

                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_3'];?>" width="175" height="175" alt="TALLERES"></i><br>
                        
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio_talleres"><?php echo $rs['titulo_3'];?></a>

                    </article>
                </div>

            </div>
            <div class="row">

                <div class="col-md-4">
                    <article class="item-servicios ">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_4'];?>" width="175" height="175" alt="REGULARIZACIÓN"></i><br>
                        
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio_padres"><?php echo $rs['titulo_4'];?></a>

                    </article>
                </div>


                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_5'];?>" width="175" height="175" alt="TRANSPORTE ESCOLAR"></i><br>
                        
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio_plataforma"><?php echo $rs['titulo_5'];?></a>

                    </article>
                </div>

                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fa"><img src="Images2/<?php echo $rs['img_6'];?>  " width="175" height="175" alt="TRANSPORTE ESCOLAR"></i><br>
                        
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#servicio_tareas"><?php echo $rs['titulo_6'];?></a>

                    </article>
                </div>

            </div>
        </div>
    </main>







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




    <!-- Modal Trasporte escolar servicio_transporte -->
    <div class="modal fade" id="servicio_transporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_1'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_1'];?></p>
        <div class="col-md-12 ">
                <img src="Images2/<?php echo $rs['Mod_img_1'];?>" alt="" width="200"  class="img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


    <!-- Modal Servicio de comedor servicio_Comedor -->
    <div class="modal fade" id="servicio_Comedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_2'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_2'];?><a href="Images2/MENU.pdf" target="_blank" >Menu Comedor</a></p>
        <div class="col-md-12 taller">
                <img src="Images2/<?php echo $rs['Mod_img_2'];?>" alt="" width="500" class="img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


    <!-- Modal Talleres servicio_talleres -->
    <div class="modal fade" id="servicio_talleres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_3'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_3'];?></p>
        <div class="col-md-12 taller">
                <img <img src="Images2/<?php echo $rs['Mod_img_3'];?>" alt="" width="500" class="img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- Modal Regularizacion servicio_padres -->
    <div class="modal fade" id="servicio_padres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_4'];?></h5>
        
      </div>
      <div class="modal-body">
      <div class="panel-body">
        <form class="center" role="form" action="SecPadres/Validacion.php" method="POST" >
              <fieldset>
                
                  
                <div class="row">

                  <div class="col-sm-12 col-8">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Email" id="user_pa" name="user_pa" type="text" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-unlock-alt"></i>
                        </span>
                        <input class="form-control" placeholder="Password" id="password_pa" name="password_pa" type="password"  required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </div>
      
    </div>
  </div>
</div>
     <!-- Modal Regularizacion  servicio_plataforma-->
    <div class="modal fade" id="servicio_plataforma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_5'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_5'];?></p>
        <div class="col-md-12 taller">
                <img <img src="Images2/<?php echo $rs['Mod_img_5'];?>" alt="" width="500" class="img-fluid m-x-auto">
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- Modal Taller de tarea  servicio_tareas-->
    <div class="modal fade" id="servicio_tareas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $rs['Mod_titu_6'];?></h5>
        
      </div>
      <div class="modal-body">
        <p><?php echo $rs['Mod_text_6'];?></p>
        <div class="col-md-12 taller">
                <img <img src="Images2/<?php echo $rs['Mod_img_6'];?>" alt="" width="500" class="img-fluid m-x-auto">
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

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
    

</body>

</html>
