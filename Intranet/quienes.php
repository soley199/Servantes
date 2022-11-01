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

       

// ==================================================================================================== -->
        if (isset($_GET['edit_num_1'])) {
            
            $sql_edit_img = 'SELECT * FROM Quienes_somos_pag where  Id_quienes = ?';
            $id = isset($_GET['edit_num_1']) ? $_GET['edit_num_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_1").modal("show");
        });
            </script>
            
             <?php  
        }
// Quienes========================================================================================================= -->
        if (isset($_GET['edit_num_2'])) {
            
            $sql_edit_img = 'SELECT * FROM Quienes_somos_pag where  Id_quienes = ?';
            $id = isset($_GET['edit_num_1']) ? $_GET['edit_num_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_1").modal("show");
        });
            </script>
            
             <?php  
        }

         if (isset($_GET['edit_num_img2'])) {
            
            $sql_num_2 = 'SELECT * FROM desarrollo_pag where id_desarrollo = ?';
            $id = isset($_GET['edit_num_img2']) ? $_GET['edit_num_img2'] : '0';
            //$id = 1;
            $statement_edit_img2 = $pdo -> prepare($sql_num_2);
            $statement_edit_img2 -> execute(array($id));
            $results_edit_img2 = $statement_edit_img2 ->fetchAll();
            $rs_num_img2 = $results_edit_img2[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img2").modal("show");
        });
            </script>
            
             <?php  
        }

        

// ========================================================================================================= -->
        


// ========================================================================================================= -->
        
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
              <a class="navbar-brand" href="#">Colegio</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="home_page.php">Inico</a></li>
                <li class="active"><a href="quienes.php">Quienes Somos</a></li>
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
          
          <center><h1>QUIENES SOMOS</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             <th>Titulo</th>
                             <th>Texto</th>
                             <th>Imagen</th>
                             <th></th>
                        <tbody>
                                <?php 
            $sql_qui_pag='select * from Quienes_somos_pag';

            foreach ($pdo ->query($sql_qui_pag) as $rs) {
              ?>
                            <tr>
                              <td><?php echo $rs['titulo'] ?></td>
                              <td><?php echo $rs['tex'] ?></td>
                              <td></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_2'] ?></td>
                              <td><?php echo $rs['tex_2'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['img_2'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="cam_num_img2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_3'] ?></td>
                              <td><?php echo $rs['tex_3'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['img_3'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="cam_num_img3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a></li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_4'] ?></td>
                              <td><?php echo $rs['tex_4'] ?></td>
                              <td><img src="../Images2/<?php echo $rs['img_4'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="cam_num_img4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a></li>
                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['Titulo_5'] ?></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img'] ?>" alt="" class="img-thumbnail" width="200px" height="150px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a>
                                   <a href="#" onclick="cam_num_img5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Cambiar Imagen</a></li>
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
 <!-- Modal ===============================================================================================-->
 <div class="fade modal" id="Edit_num_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="quienes/Edit.php?uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group"  >
                                    <label class="col-md-4 control-label" for="Id_img">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="titulo_1"  name="titulo_1" class="form-control"  type="text" value="<?php echo $rs_num_1['titulo'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                  <textarea id="text_1" name="text_1" class="form-control" ><?php echo $rs_num_1['tex'] ?>
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
        <!-- Modal 2===============================================================================================-->
 <div class="fade modal" id="Edit_num_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="quienes/Edit.php?uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group"  >
                                    <label class="col-md-4 control-label" for="Id_img">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="titulo_1"  name="titulo_1" class="form-control"  type="text" value="<?php echo $rs_num_1['titulo'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                  <textarea id="text_1" name="text_1" class="form-control" ><?php echo $rs_num_1['tex'] ?>
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
        
    function cam_num_1(e){
                //alert(e);
                location.href="quienes.php?edit_num_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

      function cam_num_2(e){
                //alert(e);
                location.href="quienes.php?edit_num_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img2(e){
                //alert(e);
                location.href="quienes.php?edit_num_img2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

        function cam_num_3(e){
                //alert(e);
                location.href="quienes.php?edit_num_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img3(e){
                //alert(e);
                location.href="quienes.php?edit_num_img3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_4(e){
                //alert(e);
                location.href="quienes.php?edit_num_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img4(e){
                //alert(e);
                location.href="quienes.php?edit_num_img4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_5(e){
                //alert(e);
                location.href="quienes.php?edit_num_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img5(e){
                //alert(e);
                location.href="quienes.php?edit_num_img5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

       
       

        
    </script>
  </body>
</html>