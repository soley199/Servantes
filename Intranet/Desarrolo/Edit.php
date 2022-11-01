<?php 
require_once('../conexion.php');

if (isset($_GET['un'])) {
    
    
            
        $sql_update = 'UPDATE desarrollo_pag SET Titulo = ? where id_desarrollo = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                        $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../Desarrollo.php');
            
            
        
}
if (isset($_GET['uno'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_1 = ?, text_1 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['uno_uno'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_1_1 = ?, text_1_1 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['uno_dos'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_1_2 = ?, text_1_2 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['dos'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_2 = ?, text_2 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['dos_uno'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_2_1 = ?, text_2_1 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['dos_dos'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_2_2 = ?, text_2_2 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['tres'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_3 = ?, text_3 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['tres_uno'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_3_1 = ?, text_3_1 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['tres_dos'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_3_2 = ?, text_3_2 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['cuatro'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_4 = ?, text_4 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['cuatro_uno'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_4_1 = ?, text_4_1 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}
if (isset($_GET['cuatro_dos'])) {
    
            
        $sql_update = 'UPDATE desarrollo_pag SET titulo_4_2 = ?, text_4_2 = ? where id_desarrollo = 1';

            
            $titulo_1 = isset($_POST['titulo_1']) ?  $_POST['titulo_1'] : '';
            $text_1 = isset($_POST['text_1']) ?  $_POST['text_1'] : '';
             $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($titulo_1,
                                               $text_1));
            
header('Location:  ../Desarrollo.php');
        
}




 ?>