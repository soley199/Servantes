<?php 
require_once('../conexion.php');

	$sql_add= 'INSERT INTO User_Padres (Nombre, Apellido, Email, Telefono, Pass,Id_Estatus) values (?,?,?,?,?,?)';

            $Nombre = isset($_POST['Nombre']) ?  $_POST['Nombre'] : '';
            $Apellido = isset($_POST['Apellido']) ?  $_POST['Apellido'] : '';
            $Email = isset($_POST['Email']) ?  $_POST['Email'] : '';
            $Telefono = isset($_POST['Telefono']) ?  $_POST['Telefono'] : '';
            $Pass = isset($_POST['Pass']) ?  $_POST['Pass'] : '';
            $Id_Estatus = isset($_POST['Estatus']) ?  $_POST['Estatus'] : '';

            $statement_add = $pdo -> prepare($sql_add);
            $statement_add -> execute(array($Nombre,$Apellido,
            								$Email,
            								$Telefono,
            								$Pass,
            								$Id_Estatus));
            

header('Location: ../padres.php');



 ?>