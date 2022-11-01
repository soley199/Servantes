<?php  
require('conexion.php');
session_start();
if(isset($_SESSION['Usuario'])){

        $sql= 'SELECT * FROM  slider_index';
        $statement = $pdo->prepare($sql);
        $statement -> execute(array());
        $SLIDER = $statement -> fetchAll();

         $sql= 'SELECT * FROM  quines_somos_index';
        $statement = $pdo->prepare($sql);
        $statement -> execute(array());
        $Queines_somos = $statement -> fetchAll();

       

// slider==================================================================================================== -->
        if (isset($_GET['edit_img_slider'])) {
            
            $sql_edit_img = 'SELECT * FROM slider_index where Id_img = ?';
            $id = isset($_GET['edit_img_slider']) ? $_GET['edit_img_slider'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_edit_img = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_img_slider").modal("show");
        });
            </script>
            
             <?php  
        }
// Quienes========================================================================================================= -->
        if (isset($_GET['quien_edit'])) {
            
            $sql_edit_img = 'SELECT * FROM quines_somos_index where   Id_Quienes = ?';
            $id = isset($_GET['quien_edit']) ? $_GET['quien_edit'] : '0';
            //$id = 1;
            $statement_edit_quien = $pdo -> prepare($sql_edit_img);
            $statement_edit_quien -> execute(array($id));
            $results_edit_quien = $statement_edit_quien ->fetchAll();
            $rs_edit_quien = $results_edit_quien[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_quien").modal("show");
        });
            </script>
            
             <?php  
        }
// ========================================================================================================= -->
        if (isset($_GET['quien_edit_img'])) {
            
            $sql_edit_img = 'SELECT * FROM quines_somos_index where   Id_Quienes = ?';
            $id = isset($_GET['quien_edit_img']) ? $_GET['quien_edit_img'] : '0';
            //$id = 1;
            $statement_edit_quien_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_quien_img -> execute(array($id));
            $results_edit_quien_img = $statement_edit_quien_img ->fetchAll();
            $rs_edit_quien_img = $results_edit_quien_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_quien_img").modal("show");
        });
            </script>
            
             <?php  
        }
// Mejor eleccion==================================================================================================== -->
        if (isset($_GET['mejor_edit'])) {
            
            $sql_edit_img = 'SELECT * FROM mejor_eleccion where   Id_Mejor = ?';
            $id = isset($_GET['mejor_edit']) ? $_GET['mejor_edit'] : '0';
            //$id = 1;
            $statement_edit_mejor = $pdo -> prepare($sql_edit_img);
            $statement_edit_mejor -> execute(array($id));
            $results_edit_mejor = $statement_edit_mejor ->fetchAll();
            $rs_edit_mejor = $results_edit_mejor[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_mejor").modal("show");
        });
            </script>
            
             <?php  
        }
// ========================================================================================================= mejor_edit-->
        
    }else{
        header("Location: index.php?Error=Acceso Denegado");
    }
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Adminsitrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/home_page.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../index.php">Colegio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="home_page.php">Inico</a></li>
                <li><a href="quienes.php">Quienes Somos</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Oferta Educativa <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="Kinder.php">Kinder</a></li>
                    <li><a href="Primaria.php">Primaria</a></li>
                    <li><a href="Secundaria.php">Secundaria</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyecto educativo <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="servico.php">Servicio</a></li>
                    <li><a href="Desarrollo.php">Desarrolo Humano</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminsitración Padres <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="padres.php">Padres</a></li>
                    <li><a href="contenido.php">Contenido</a></li>
                    
                  </ul>
                </li>
                <?php 
                  $dato = $_SESSION['Usuario'];
                  for ($i=0; $i <count($dato); $i++) 
                  {
                ?>
                <li><a href="#">Bienbenido(a): <?php echo $dato [$i]['Nombre'];?></a></li>
                <?php                               
                  }
                  ?>
                <li><a href="salir.php">Salir</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="container-fluid">
          
          <center><h1>SLIDER INICIO</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             <th>Id_Slider</th>
                             <th>Nombre</th>
                             <th> </th>
                        <tbody>
                                <?php 
                                foreach ($SLIDER as $rs ) {
                                    ?>
                            <tr>
                              <td><?php echo $rs['Id_img'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['Imagen'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_img_slider(<?php echo $rs['Id_img'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a></li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                                <?php 
                                }
                             ?>

                                
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
 <!-- Modal ==================================================================================================== -->
      <div class="fade modal" id="Edit_img_slider">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Index/Slider_img_cambio.php" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_edit_img['Imagen'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Id_img" readonly="readonly"  name="Id_img" class="form-control"  type="text" value="<?php echo $rs_edit_img['Id_img'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            
                                            <input id="file" name="file" class="form-control" type="file"  required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>




<!-- Quienes somos ==================================================================================================== -->

        <center><h1>QUINES SOMOS</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             <th>Id</th>
                             <th>Titulo</th>
                             <th>Parrafo</th>
                             <th>Imagen</th>
                             <th> </th>
                        <tbody>
                                <?php 
                                foreach ($Queines_somos as $rs ) {
                                    ?>
                            <tr>
                              <td><?php echo $rs['Id_Quienes'] ?></td>
                              <td><?php echo $rs['Titulo'] ?></td>
                              <td><?php echo $rs['Parrafo'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['Imagen'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>  



                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                                <?php 
                                }
                             ?>

                                
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      
    </div>
<!-- ==================================================================================================== -->
<div class="fade modal" id="Edit_quien">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Index/edit_quien.php" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group"  >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Id_Quienes" readonly="readonly"  name="Id_Quienes" class="form-control"  type="text" value="<?php echo $rs_edit_quien['Id_Quienes'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label" for="Id_img">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo"   name="Titulo" class="form-control"  type="text" value="<?php echo $rs_edit_quien['Titulo'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Parrafo" name="Parrafo" class="form-control" ><?php echo $rs_edit_quien['Parrafo'] ?>
                                      </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================================================================================================== -->


        <div class="fade modal" id="Edit_quien_img">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Index/edit_quien_img.php" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_edit_quien_img['Imagen'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Id_img" readonly="readonly"  name="Id_img" class="form-control"  type="text" value="<?php echo $rs_edit_quien_img['Id_Quienes'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            
                                            <input id="file" name="file" class="form-control" type="file"  required="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- Somos tu mejor eleccion========================================================================================== -->
  <center><h1>¿Porqué somos tu mejor elección?</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             
                             <th>Titulo</th>
                             <th>Sub Titulo</th>
                             <th>Imagen</th>
                             <th> </th>
                        <tbody>
                                <?php 
            $sql_me='select * from mejor_eleccion';

            foreach ($pdo ->query($sql_me) as $rs) {
              ?>
                            <tr>
                              <td><?php echo $rs['Titulo'] ?></td>
                              <td><?php echo $rs['Subtitulo'] ?></td>
                              <td></td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['1_titulo'] ?></td>
                              <td><?php echo $rs['1_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['1_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['1.2_titulo'] ?></td>
                              <td><?php echo $rs['1.2_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['1.2_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['2_titulo'] ?></td>
                              <td><?php echo $rs['2_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['2_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['3_titulo'] ?></td>
                              <td><?php echo $rs['3_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['3_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['Img_centro'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['4_titulo'] ?></td>
                              <td><?php echo $rs['4_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['4_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['4.1_titulo'] ?></td>
                              <td><?php echo $rs['4.1_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['4.1_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['5_titulo'] ?></td>
                              <td><?php echo $rs['5_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['5_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['6_titulo'] ?></td>
                              <td><?php echo $rs['6_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['6_img'] ?>" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="mejor_edit(<?php echo $rs['Id_Mejor'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                                <?php 
                                }
                             ?>  
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==================================================================================================== -->
<div class="fade modal" id="Edit_mejor">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Index/edit_quien.php" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group"  >
                                    <label class="col-md-4 control-label" for="Id_img">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" readonly="readonly"  name="Titulo" class="form-control"  type="text" value="<?php echo $rs_edit_mejor['Titulo'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Parrafo" name="Parrafo" class="form-control" ><?php echo $rs_edit_mejor['Subtitulo'] ?>
                                      </textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>
                                
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- Servicos index========================================================================================== -->
 <center><h1>Nuestros Servicios</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             
                             <th>Titulo</th>
                             <th>Parrafo</th>
                             <th>Imagen</th>
                             <th> </th>
                        <tbody>
                                <?php 
                    $sql_ser='select * from servicios_index';

            foreach ($pdo ->query($sql_ser) as $rs) {
              ?>
                            <tr>
                              <td><?php echo $rs['Titulo'] ?></td>
                              <td></td>
                              <td></td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['1_titulo'] ?></td>
                              <td><?php echo $rs['1_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['1_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['2_titulo'] ?></td>
                              <td><?php echo $rs['2_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['2_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['3_titulo'] ?></td>
                              <td><?php echo $rs['3_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['3_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['4_titulo'] ?></td>
                              <td><?php echo $rs['4_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['4_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['5_titulo'] ?></td>
                              <td><?php echo $rs['5_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['5_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['6_titulo'] ?></td>
                              <td><?php echo $rs['6_text'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['6_img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" >
                              </td>
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li>
                                   <a href="#" onclick="quienes_edit(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="quienes_edit_img(<?php echo $rs['Id_Quienes'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a>
                                   </li>
                                  </ul>
                                  </div>
                              </td>
                            </tr>
                                <?php 
                                }
                             ?>

                                
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      
    </div>
      
    </div>
<footer>
  <p>Footer</p>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript">
        
    function cam_img_slider(e){
                //alert(e);
                location.href="home_page.php?edit_img_slider="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function quienes_edit(e){
                //alert(e);
                location.href="home_page.php?quien_edit="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

        function quienes_edit_img(e){
                //alert(e);
                location.href="home_page.php?quien_edit_img="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function mejor_edit(e){
                //alert(e);
                location.href="home_page.php?mejor_edit="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
       
       

        
    </script>
  </body>
</html>