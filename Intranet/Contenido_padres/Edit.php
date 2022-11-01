<?php 
require_once('../conexion.php');

if (isset($_GET['uno'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_1 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
if (isset($_GET['dos'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_2 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
if (isset($_GET['tres'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_3 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
if (isset($_GET['cuatro'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_4 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
if (isset($_GET['sinco'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_5 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
if (isset($_GET['seis'])) {
    
    
            
        $sql_update = 'UPDATE contenido_padres SET titulo_6 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo));
            
header('Location:  ../contenido.php');
            
            
        
}
//2==========================================================================================================

//2_1==========================================================================================================

if (isset($_GET['dos_uno'])) {
        $sql_update = 'UPDATE contenido_padres SET Mod_titu1 = ?, Mod_text_1 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Text = isset($_POST['Text']) ?  $_POST['Text'] : '';

                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../contenido.php');
            
            
        
}
//2_2==========================================================================================================

if (isset($_GET['dos_dos'])) {
        $sql_update = 'UPDATE contenido_padres SET Mod_titu_2 = ?, Mod_text_2 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Text = isset($_POST['Text']) ?  $_POST['Text'] : '';

                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../contenido.php');
            
            
        
}
//2_3==========================================================================================================

if (isset($_GET['dos_tres'])) {
        $sql_update = 'UPDATE contenido_padres SET Mod_titu_3 = ?, Mod_text_3 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Text = isset($_POST['Text']) ?  $_POST['Text'] : '';

                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../contenido.php');
            
            
        
}
//2_4==========================================================================================================

if (isset($_GET['dos_cuatro'])) {
        $sql_update = 'UPDATE contenido_padres SET Mod_titu_4 = ?, Mod_text_4 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Text = isset($_POST['Text']) ?  $_POST['Text'] : '';

                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../contenido.php');
            
            
        
}
//2_5==========================================================================================================

if (isset($_GET['dos_sinco'])) {
        $sql_update = 'UPDATE contenido_padres SET Mod_titu_5 = ?, Mod_text_5 = ? where id_con_pa = 1';

            
            $Titulo = isset($_POST['Titulo']) ?  $_POST['Titulo'] : '';
            $Text = isset($_POST['Text']) ?  $_POST['Text'] : '';

                   $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array($Titulo,$Text));
            
header('Location:  ../contenido.php');
            
            
        
}
 ?>