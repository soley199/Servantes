<?php 

require_once('../conexion.php');

if (isset($_GET['uno'])) {
        $sql_update = 'UPDATE Quienes_somos_pag SET titulo = ?, tex = ? where Id_quienes = 1';

            $Titulo = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $Text = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../quienes.php');
}

if (isset($_GET['dos'])) {
        $sql_update = 'UPDATE Quienes_somos_pag SET titulo_2 = ?, tex_2 = ? where Id_quienes = 1';

            $Titulo = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $Text = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../quienes.php');
}

if (isset($_GET['tres'])) {
        $sql_update = 'UPDATE Quienes_somos_pag SET titulo_3 = ?, tex_3 = ? where Id_quienes = 1';

            $Titulo = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $Text = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../quienes.php');
}

if (isset($_GET['cuatro'])) {
        $sql_update = 'UPDATE Quienes_somos_pag SET titulo_4 = ?, tex_4 = ? where Id_quienes = 1';

            $Titulo = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $Text = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../quienes.php');
}

if (isset($_GET['sinco'])) {
        $sql_update = 'UPDATE Quienes_somos_pag SET Titulo_5 = ? where Id_quienes = 1';

            $Titulo = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../quienes.php');
}

 ?>