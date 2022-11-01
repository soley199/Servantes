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
                            <a class="dropdown-item" href="servicios.php">Servicio</a>
                            <a class="dropdown-item" href="Desarrollo.php">Desarrollo Humano</a>
                            </div>
                        </li> 
                        <li class="active"><a href="contacto.php">Contacto</a></li>
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

    </section>
    <section class="ruta p-y-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="index.php">Inicio</a> » Contacto

                </div>
            </div>
        </div>
    </section>
    <main class="p-y-1 fondo">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h2 class="m-b-2">Formulario de contacto</h2>
                    <form action="enviar.php" method="post">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" required="required" data-placement="top" title="Ingrese su nombre completo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asunto" class="col-md-4 col-form-label">Asunto</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Ingrese su Asunto" data-toggle="tooltip" required="required" data-placement="top" title="Ingrese su Asunto">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" accept="required="required"" data-placement="top" title="Ingrese su email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" required="required" data-placement="top" title="Ingrese un mensaje"></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>




                </div>
                <div class="col-md-4">
                    <h3>Detalles de contacto</h3>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2656.3759623213737!2d-99.03372344425998!3d19.68352885425226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f28d166bc6a1%3A0x3853b7ffd5d69bb3!2scolegio+bilingue+miguel+de+cervantes+saavedra!5e0!3m2!1ses-419!2smx!4v1484672683146" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                    <p>
                        <div class="row col1">
                       <div class="col-xs-3">
                           <i class="fa fa-map-marker" style="font-size:16px;"></i>Dir.</div>
                       <div class="col-xs-9">
                           Prolongación Dalias N°25, A 100 Mts. <br>de Avenida Acueducto,<br>Ojo de agua Tecamac Edo. Mex.
                       </div>
                   </div>
                   
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>Tel.</div>
                        <div class="col-sm-9">
                             (01) 5932 3496
                        </div>
                    </div>
                    
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>Email</div>
                        <div class="col-sm-9">
                             <a href="mailto:info@yourdomain.com">contacto@colegiomcervantes.edu.mx </a> 
                        </div>
                    </div>
                    </p>

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

    <!-- Carga de archivos  JS -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>

</body>

</html>
