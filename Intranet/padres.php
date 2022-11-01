<?php  
require('conexion.php');
session_start();
if(isset($_SESSION['Usuario'])){

        $sql= 'SELECT User_Padres.*,estatus.Estatus FROM  User_Padres INNER JOIN estatus ON User_Padres.Id_Estatus = estatus.Id_Estatus';
        $statement = $pdo->prepare($sql);
        $statement -> execute(array());
        $Padres = $statement -> fetchAll();

         

       

// slider==================================================================================================== -->
        if (isset($_GET['edit'])) {
            
            $sql_edit= 'SELECT User_Padres.*,estatus.Estatus FROM  User_Padres INNER JOIN estatus ON User_Padres.Id_Estatus = estatus.Id_Estatus where id_padre=?';
            $id = isset($_GET['edit']) ? $_GET['edit'] : '1';
            //$id = 1;
            $statement_edit = $pdo -> prepare($sql_edit);
            $statement_edit -> execute(array($id));
            $results_edit = $statement_edit ->fetchAll();
            $rs_edit = $results_edit[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Padre_edit").modal("show");
        });
            </script>
            
             <?php  
        }
// Quienes========================================================================================================= -->
        if ($_POST) {
            
        $sql_update = 'UPDATE User_Padres SET Nombre = ?, Apellido = ?, Email = ?, Telefono = ?,Pass = ?,Id_Estatus = ? where id_padre = ?';

            $id_padre = isset($_POST['id_padre']) ? $_POST['id_padre'] : '';
            $Nombre = isset($_POST['Nombre']) ?  $_POST['Nombre'] : '';
            $Apellido = isset($_POST['Apellido']) ?  $_POST['Apellido'] : '';
            $Email = isset($_POST['Email']) ?  $_POST['Email'] : '';
            $Telefono = isset($_POST['Telefono']) ?  $_POST['Telefono'] : '';
            $Pass = isset($_POST['Pass']) ?  $_POST['Pass'] : '';
            $Id_Estatus = isset($_POST['Estatus']) ?  $_POST['Estatus'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Nombre,
                                            $Apellido,
                                            $Email,
                                            $Telefono,
                                            $Pass,
                                            $Id_Estatus,
                                            $id_padre));
            
header('Location:  padres.php');
            
            
        
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
                <li><a href="home_page.php">Inico</a></li>
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
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adminsitración Padres <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="active"> <a href="padres.php">Padres</a></li>
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
          
          <center><h1>PADRES REGISTRADOS</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                        <th>Id_Padre</th>
                             <th>Nombre</th>
                             <th>Apellido</th>
                             <th>Email</th>
                             <th>Telefono</th>
                             <th>Contraseña</th>
                             <th>Estatus</th>
                             <th> 
                            <a href="#" data-toggle="modal" data-target="#padre_add"><i class="fa fa-user"> </i> Agregar</a></th>
                        <tbody>
                               <?php 
                                foreach ($Padres as $rs ) {
                                    ?>
                            <tr>
                              <td><?php echo $rs['id_padre'] ?></td>
                              <td><?php echo $rs['Nombre'] ?></td>
                              <td><?php echo $rs['Apellido'] ?></td>
                              <td><?php echo $rs['Email'] ?></td>
                              <td><?php echo $rs['Telefono'] ?></td>
                              <td><?php echo $rs['Pass'] ?></td> 
                              <td><?php echo $rs['Estatus'] ?></td> 
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#"  onclick="recargar(<?php echo $rs['id_padre'] ?>);"><i class="fa fa-fw fa-cog"></i>Modificar</a></li>
                                   <li><a href="#" onclick="eliminar(<?php echo $rs['id_padre'] ?>);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw s fa-remove"></i>Eliminar</a></li>
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
 <!-- Modal Agregar ==================================================================================================-->
<div class="fade modal" id="padre_add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Registro de Padres</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Padre/Padres_add.php">
                            <fieldset>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Pápa">Nombre</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Proveedor" name="Nombre" class="form-control" placeholder="Nombre" type="text"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Contacto" name="Apellidos" class="form-control" placeholder="Apellido" type="text"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Email">Email</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="RFC" name="Email" class="form-control" placeholder="Email" type="text"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Telefono">Telefono</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input id="Telefono" name="Telefono" class="form-control" placeholder="Telefono" type="text"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Contraseña">Contraseña</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input id="Pass" name="Pass" class="form-control" placeholder="Contraseña" type="password"  required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Estatus">Estatus</label>
                                    <div class="col-md-5">
                                    
                                        <select id="Estatus" name="Estatus" class="form-control">
                                            
                                            <option value="1">Activo</option>
                                            <option value="2">Inactivo</option>
                                            
                                        </select>
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

 <!-- Modal Editar ==================================================================================================-->
 <div class="fade modal" id="Padre_edit">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar Padre</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="padres.php">
                            <fieldset>
                            <div class="form-group">
                                    <label class="col-md-4 control-label" for="Iid_Padre">Id_Padre</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Id_Proveedor" readonly="readonly"  name="id_padre" class="form-control"  type="text" value="<?php echo $rs_edit['id_padre'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Nombre">Nombre</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Proveedor" name="Nombre" class="form-control" placeholder="Nombre" value="<?php echo $rs_edit['Nombre'] ?>" type="text"  required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Apellido">Apellido</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Contacto" name="Apellido" class="form-control" placeholder="Apellido" type="text"  value="<?php echo $rs_edit['Apellido'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Email">Email</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="RFC" name="Email" class="form-control" placeholder="Email" type="text" value="<?php echo $rs_edit['Email'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Telefono">Telefono</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input id="Telefono" name="Telefono" class="form-control" placeholder="Telefono" type="text" value="<?php echo $rs_edit['Telefono'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Pass">Contraseña</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                            <input id="Celular" name="Pass" class="form-control" placeholder="Contraseña" type="text" value="<?php echo $rs_edit['Pass'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Estatus">Estatus</label>
                                    <div class="col-md-5">
                                    <?php 
                                    if ($rs_edit['Estatus'] == 'Activo' ) {
                                        ?>
                                        <select id="Estatus" name="Estatus" class="form-control">
                                            <option value="1" selected="selected">Activo</option>
                                            <option value="2">Inactivo</option>
                                            
                                            
                                        </select>
                                        <?php 
                                        
                                    } else {
                                        ?>

                                        <select id="Estatus" name="Estatus" class="form-control">
                                            <option value="1">Activo</option>
                                            <option value="2" selected="selected">Inactivo</option>
                                            
                                            
                                        </select>

                                        <?php 
                                    }
                                    
                                     ?>
                                    
                                        
                                        
                                        
                                    </div>
                                        <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-save"></i>Guardar</button>
                                </div>

                                
                                <!-- File Button -->
                                <!-- Password input-->
                                
                                <!-- Button -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

 <!-- Modal ==================================================================================================-->

 </div>
<footer>
  <p></p>
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
        
    function eliminar(e){
               var confirmacion = confirm('Estas seguro de eliminar este Proveedor ')
               if (confirmacion) {
                    location.href="Padre/padre_delet.php?padredelet="+ e;
                
               } 
                //location.href="user_delet.php?userdelet="+ e;
                
                //$('#usuario_edit').modal();
        }

        

        function recargar(e){
                //alert(e);
                location.href="padres.php?edit="+ e;
                
                //$('#usuario_edit').modal();
        }
       

        
    </script>
  </body>
</html>