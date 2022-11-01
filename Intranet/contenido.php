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

       

// Numero 1==================================================================================================== -->
        if (isset($_GET['edit_num_1'])) {
            
            $sql_edit_img = 'SELECT titulo_1 FROM contenido_padres where id_con_pa = ?';
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
        if (isset($_GET['edit_num_img_1'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_1']) ? $_GET['edit_num_img_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_1").modal("show");
        });
            </script>
            
             <?php  
        }
// Numero 2==================================================================================================== -->
        if (isset($_GET['edit_num_2'])) {
            
            $sql_edit_img = 'SELECT titulo_2 FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2']) ? $_GET['edit_num_2'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2']) ? $_GET['edit_num_img_2'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2").modal("show");
        });
            </script>
            
             <?php  
        }

// Numero 3==================================================================================================== -->
        if (isset($_GET['edit_num_3'])) {
            
            $sql_edit_img = 'SELECT titulo_3 FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_3']) ? $_GET['edit_num_3'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_3 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_3").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_3'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_3']) ? $_GET['edit_num_img_3'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_3 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_3").modal("show");
        });
            </script>
            
             <?php  
        }
        // Numero 4==================================================================================================== -->
        if (isset($_GET['edit_num_4'])) {
            
            $sql_edit_img = 'SELECT titulo_4 FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_4']) ? $_GET['edit_num_4'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_4 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_4").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_4'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_4']) ? $_GET['edit_num_img_4'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_4 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_4").modal("show");
        });
            </script>
            
             <?php  
        }
        // Numero 5==================================================================================================== -->
        if (isset($_GET['edit_num_5'])) {
            
            $sql_edit_img = 'SELECT titulo_5 FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_5']) ? $_GET['edit_num_5'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_5 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_5").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_5'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_5']) ? $_GET['edit_num_img_5'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_5 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_5").modal("show");
        });
            </script>
            
             <?php  
        }
        // Numero 6==================================================================================================== -->
        if (isset($_GET['edit_num_6'])) {
            
            $sql_edit_img = 'SELECT titulo_6 FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_6']) ? $_GET['edit_num_6'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_6 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_6").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_6'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_6']) ? $_GET['edit_num_img_6'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_6 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_6").modal("show");
        });
            </script>
            
             <?php  
        }
        


// Segunda seccion==================================================================================================== -->

  // 2_1========================================================================================================= -->
        if (isset($_GET['edit_num_2_1'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2_1']) ? $_GET['edit_num_2_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2_1").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_des_2_1'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_des_2_1']) ? $_GET['edit_num_des_2_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_des_2_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_des_2_1").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2_1'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2_1']) ? $_GET['edit_num_img_2_1'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2_1").modal("show");
        });
            </script>
            
             <?php  
        }

// Numero 2_2====================================================================================================

         if (isset($_GET['edit_num_2_2'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2_2']) ? $_GET['edit_num_2_2'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2_2 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2_2").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_des_2_2'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_des_2_2']) ? $_GET['edit_num_des_2_2'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_des_2_2 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_des_2_2").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2_2'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2_2']) ? $_GET['edit_num_img_2_2'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2_1 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2_2").modal("show");
        });
            </script>
            
             <?php  
        }

// Numero 2_3====================================================================================================
         if (isset($_GET['edit_num_2_3'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2_3']) ? $_GET['edit_num_2_3'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2_3 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2_3").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_des_2_3'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_des_2_3']) ? $_GET['edit_num_des_2_3'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_des_2_3 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_des_2_3").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2_3'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2_3']) ? $_GET['edit_num_img_2_3'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2_3 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2_3").modal("show");
        });
            </script>
            
             <?php  
        }

// Numero 2_4====================================================================================================
         if (isset($_GET['edit_num_2_4'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2_4']) ? $_GET['edit_num_2_4'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2_4 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2_4").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_des_2_4'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_des_2_4']) ? $_GET['edit_num_des_2_4'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_des_2_4 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_des_2_4").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2_4'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2_4']) ? $_GET['edit_num_img_2_4'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2_4 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2_4").modal("show");
        });
            </script>
            
             <?php  
        }

// Numero 2_5====================================================================================================
         if (isset($_GET['edit_num_2_5'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_2_5']) ? $_GET['edit_num_2_5'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_2_5 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_2_5").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_des_2_5'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_des_2_5']) ? $_GET['edit_num_des_2_5'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_des_2_5 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_des_2_5").modal("show");
        });
            </script>
            
             <?php  
        }
        if (isset($_GET['edit_num_img_2_5'])) {
            
            $sql_edit_img = 'SELECT * FROM contenido_padres where id_con_pa = ?';
            $id = isset($_GET['edit_num_img_2_5']) ? $_GET['edit_num_img_2_5'] : '0';
            //$id = 1;
            $statement_edit_img = $pdo -> prepare($sql_edit_img);
            $statement_edit_img -> execute(array($id));
            $results_edit_img = $statement_edit_img ->fetchAll();
            $rs_num_img_2_5 = $results_edit_img[0];
            
            ?>
            <script src="js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
    
            $("#Edit_num_img_2_5").modal("show");
        });
            </script>
            
             <?php  
        }

// Fin====================================================================================================
        
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
                <li ><a href="quienes.php">Quienes Somos</a></li>
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
                    <li class="active"><a href="contenido.php">Contenido</a></li>
                    
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
          
          <center><h1>Contenido Pla. Padres</h1></center>
          <hr class="featurette-divider">


          <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped">
                             <th>Titulo</th>
                             <th>Texto</th>
                             <th>Descarga</th>
                             <th>Imagen</th>
                             <th></th>
                        <tbody>
                                <?php 
            $sql_qui_pag='select * from contenido_padres';

            foreach ($pdo ->query($sql_qui_pag) as $rs) {
              ?>
                            <tr>
                              <td><?php echo $rs['titulo_1'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_1'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_2'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_2'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_3'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_3'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_4'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_4'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_5'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_5'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['titulo_6'] ?></td>
                              <td></td>
                              <td></td>
                              <td><img src="../Images2/<?php echo $rs['img_6'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_6(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_img_6(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>


 <!-- Segunda seccion============================================================================================= -->

                            <tr>
                              <td><?php echo $rs['Mod_titu1'] ?></td>
                              <td><?php echo $rs['Mod_text_1'] ?></td>
                              <td><iframe src="../Images2/<?php echo $rs['Mod_img_descarga_1'] ?>" width="150" height="75" style="border: none;"></iframe></td>
                              <td><img src="../Images2/<?php echo $rs['Mod_img_1'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_des_2_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Descarga</a></li>
                                   <li><a href="#" onclick="cam_num_img_2_1(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['Mod_titu_2'] ?></td>
                              <td><?php echo $rs['Mod_text_2'] ?></td>
                              <td><iframe src="../Images2/<?php echo $rs['Mod_img_descarga_2'] ?>" width="150" height="75" style="border: none;"></iframe></td>
                              <td><img src="../Images2/<?php echo $rs['Mod_img_2'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_des_2_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Descarga</a></li>
                                   <li><a href="#" onclick="cam_num_img_2_2(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['Mod_titu_3'] ?></td>
                              <td><?php echo $rs['Mod_text_3'] ?></td>
                              <td><iframe src="../Images2/<?php echo $rs['Mod_img_descarga_3'] ?>" width="150" height="75" style="border: none;"></iframe></td>
                              <td><img src="../Images2/<?php echo $rs['Mod_img_3'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_des_2_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Descarga</a></li>
                                   <li><a href="#" onclick="cam_num_img_2_3(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['Mod_titu_4'] ?></td>
                              <td><?php echo $rs['Mod_text_4'] ?></td>
                              <td><iframe src="../Images2/<?php echo $rs['Mod_img_descarga_4'] ?>" width="150" height="75" style="border: none;"></iframe></td>
                              <td><img src="../Images2/<?php echo $rs['Mod_img_4'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_des_2_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Descarga</a></li>
                                   <li><a href="#" onclick="cam_num_img_2_4(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

                                            </ul>
                                          </div>
                              </td>
                            </tr>
                            <tr>
                              <td><?php echo $rs['Mod_titu_5'] ?></td>
                              <td><?php echo $rs['Mod_text_5'] ?></td>
                              <td><iframe src="../Images2/<?php echo $rs['Mod_img_descarga_5'] ?>" width="150" height="75" style="border: none;"></iframe></td>
                              <td><img src="../Images2/<?php echo $rs['Mod_img_5'] ?>" alt="" class="img-thumbnail" width="100px" height="100px" ></td>  
                              <td><div class="btn-group" role="group" aria-label="...">
                                  <div class="btn-group" role="group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                                   Configuraciones<span class="caret"></span>
                                   </button>
                                   <ul class="dropdown-menu">
                                   <li><a href="#" onclick="cam_num_2_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                                   <li><a href="#" onclick="cam_num_des_2_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Descarga</a></li>
                                   <li><a href="#" onclick="cam_num_img_2_5(1);" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw fa-cog"></i>Editar Imagen</a></li>

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
 <!-- Modal 1============================================================================================= -->

 <div class="fade modal" id="Edit_num_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_1['titulo_1'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_1['img_1'] ?>" required="">
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

        <!-- Modal 2 ============================================================================================= -->
        <div class="fade modal" id="Edit_num_2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos=2" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_2['titulo_2'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?dos=2" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2['img_2'] ?>" required="">
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
        <!-- Modal 3============================================================================================= -->

 <div class="fade modal" id="Edit_num_3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?tres=3" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_3['titulo_3'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?tres=3" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_1['img_1'] ?>" required="">
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
         <!-- Modal 4============================================================================================= -->

 <div class="fade modal" id="Edit_num_4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?cuatro=4" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_4['titulo_4'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?cuatro=4" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_4['img_4'] ?>" required="">
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
         <!-- Modal 5============================================================================================= -->

 <div class="fade modal" id="Edit_num_5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?sinco=5" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_5['titulo_5'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?sinco=5" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_5['img_5'] ?>" required="">
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

         <!-- Modal 6============================================================================================= -->

 <div class="fade modal" id="Edit_num_6">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?seis=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Titulo" name="Titulo" class="form-control" ><?php echo $rs_num_6['titulo_6'] ?>
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
        <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_6">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?seis=6" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_6['img_6'] ?>" required="">
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

        <!-- Seccion dos============================================================================================= -->


  <!-- Modal 2_1========================================================================================== -->

 <div class="fade modal" id="Edit_num_2_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos_uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Titulo">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" name="Titulo" class="form-control" placeholder="Titulo" type="text" value="<?php echo $rs_num_2_1['Mod_titu1'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Text" name="Text" class="form-control" ><?php echo $rs_num_2_1['Mod_text_1'] ?>
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
        <!--  ================================================================================================== -->

 <div class="fade modal" id="Edit_num_des_2_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio PDF</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?des_uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_pdf">PDF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_des_2_1['Mod_img_descarga_1'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">PDF</label>
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
    <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2_1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?img_uno=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2_1['Mod_img_1'] ?>" required="">
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

  <!-- Modal 2_2========================================================================================== -->

 <div class="fade modal" id="Edit_num_2_2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos_dos=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Titulo">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" name="Titulo" class="form-control" placeholder="Titulo" type="text" value="<?php echo $rs_num_2_2['Mod_titu_2'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Text" name="Text" class="form-control" ><?php echo $rs_num_2_2['Mod_text_2'] ?>
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
        <!--  ================================================================================================== -->

 <div class="fade modal" id="Edit_num_des_2_2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio PDF</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?des_dos=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_pdf">PDF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_des_2_2['Mod_img_descarga_2'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">PDF</label>
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
         <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2_2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?img_dos=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2_2['Mod_img_2'] ?>" required="">
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

  <!-- Modal 2_3========================================================================================== -->

 <div class="fade modal" id="Edit_num_2_3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos_tres=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Titulo">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" name="Titulo" class="form-control" placeholder="Titulo" type="text" value="<?php echo $rs_num_2_3['Mod_titu_3'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Text" name="Text" class="form-control" ><?php echo $rs_num_2_3['Mod_text_3'] ?>
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
        <!--  ================================================================================================== -->

 <div class="fade modal" id="Edit_num_des_2_3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio PDF</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?des_tres=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_pdf">PDF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_des_2_3['Mod_img_descarga_3'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">PDF</label>
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
         <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2_3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?img_tres=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2_3['Mod_img_3'] ?>" required="">
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

  <!-- Modal 2_4========================================================================================== -->

 <div class="fade modal" id="Edit_num_2_4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos_cuatro=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Titulo">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" name="Titulo" class="form-control" placeholder="Titulo" type="text" value="<?php echo $rs_num_2_4['Mod_titu_4'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Text" name="Text" class="form-control" ><?php echo $rs_num_2_4['Mod_text_4'] ?>
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
        <!--  ================================================================================================== -->

 <div class="fade modal" id="Edit_num_des_2_4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio PDF</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?des_cuatro=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_pdf">PDF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_des_2_4['Mod_img_descarga_4'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">PDF</label>
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
         <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2_4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?img_cuatro=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2_4['Mod_img_4'] ?>" required="">
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

<!-- Modal 2_5========================================================================================== -->

 <div class="fade modal" id="Edit_num_2_5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Editar</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit.php?dos_sinco=1" 
                        enctype="multipart/form-data">
                            <fieldset>                    
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Titulo">Titulo</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="Titulo" name="Titulo" class="form-control" placeholder="Titulo" type="text" value="<?php echo $rs_num_2_5['Mod_titu_5'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">Texto</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                    <textarea id="Text" name="Text" class="form-control" ><?php echo $rs_num_2_5['Mod_text_5'] ?>
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
        <!--  ================================================================================================== -->

 <div class="fade modal" id="Edit_num_des_2_5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio PDF</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?des_sinco=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_pdf">PDF</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_des_2_5['Mod_img_descarga_5'] ?>" required="">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Name -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="file">PDF</label>
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
         <!--  ============================================================================================= -->

 <div class="fade modal" id="Edit_num_img_2_5">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title" id="myModalLabel">Cambio Imagen</h2>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="Contenido_padres/Edit_img.php?img_sinco=1" 
                        enctype="multipart/form-data">
                            <fieldset>
                            <div class="form-group" style='display:none;' >
                                    <label class="col-md-4 control-label" for="Id_img">Id imagen</label>
                                    <div class="col-md-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input id="nombreimg" readonly="readonly"  name="nombreimg" class="form-control"  type="text" value="<?php echo $rs_num_img_2_5['Mod_img_5'] ?>" required="">
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
                location.href="contenido.php?edit_num_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_1(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
// Numero 2=============================================================================================
        function cam_num_2(e){
                //alert(e);
                location.href="contenido.php?edit_num_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_2(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        // Numero 3=============================================================================================
        function cam_num_3(e){
                //alert(e);
                location.href="contenido.php?edit_num_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_3(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        // Numero 4=============================================================================================
        function cam_num_4(e){
                //alert(e);
                location.href="contenido.php?edit_num_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_4(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        // Numero 5=============================================================================================
        function cam_num_5(e){
                //alert(e);
                location.href="contenido.php?edit_num_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_5(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        // Numero 6=============================================================================================
        function cam_num_6(e){
                //alert(e);
                location.href="contenido.php?edit_num_6="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_img_6(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_6="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }


//=======================================================================================================================





        // Numero 2_1=============================================================================================
        function cam_num_2_1(e){
                //alert(e);
                location.href="contenido.php?edit_num_2_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_des_2_1(e){
                //alert(e);
                location.href="contenido.php?edit_num_des_2_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_img_2_1(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2_1="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
         // Numero 2_2=============================================================================================
        function cam_num_2_2(e){
                //alert(e);
                location.href="contenido.php?edit_num_2_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_des_2_2(e){
                //alert(e);
                location.href="contenido.php?edit_num_des_2_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_img_2_2(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2_2="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
         // Numero 2_3=============================================================================================
        function cam_num_2_3(e){
                //alert(e);
                location.href="contenido.php?edit_num_2_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_des_2_3(e){
                //alert(e);
                location.href="contenido.php?edit_num_des_2_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_img_2_3(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2_3="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
         // Numero 2_4=============================================================================================
        function cam_num_2_4(e){
                //alert(e);
                location.href="contenido.php?edit_num_2_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_des_2_4(e){
                //alert(e);
                location.href="contenido.php?edit_num_des_2_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_img_2_4(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2_4="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
         // Numero 2_5=============================================================================================
        function cam_num_2_5(e){
                //alert(e);
                location.href="contenido.php?edit_num_2_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }

         function cam_num_des_2_5(e){
                //alert(e);
                location.href="contenido.php?edit_num_des_2_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
        function cam_num_img_2_5(e){
                //alert(e);
                location.href="contenido.php?edit_num_img_2_5="+ e;
                
                //$('#usuario_edit').modal();  cam_img
        }
       

        
    </script>
  </body>
</html>