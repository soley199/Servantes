<?php
session_start();
 require_once('conexion.php');


	$sql ="select * from usuarios where Email='".$_POST['Usuario']."' AND Pass='".$_POST['Password']."'";
            foreach ($pdo ->query($sql) as $rs) {
            $arreglo[]=array('Id_Usuario'=>$rs['Id_Usuario'],
            				 'Nombre'=>$rs['Nombre'],
							 'Apellido'=>$rs['Apellido']);
			
            }

	if(isset($arreglo)){
		$_SESSION['Usuario']=$arreglo;
		header("Location: home_page.php");
	}else{
		header("Location: index.php?error=''");
	}
?>