<?php 
require('../conexion.php');

if ($_POST) {
$sql_update = 'UPDATE quines_somos_index SET Titulo = ?, Parrafo = ? where Id_Quienes = ?';
            $Id = isset($_POST['Id_Quienes']) ?  $_POST['Id_Quienes'] : '';
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Parrafo = isset($_POST['Parrafo']) ?  $_POST['Parrafo'] : '';
            
            
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $Titulo, $Parrafo,$Id));

            header('Location: ../home_page.php');

}

             ?>



            