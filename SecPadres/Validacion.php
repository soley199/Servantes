<?php
session_start();
 require_once('conexion.php');


	$sql ="select * from User_Padres where Email='".$_POST['user_pa']."' AND Pass='".$_POST['password_pa']."'";
            foreach ($pdo ->query($sql) as $rs) {
            $arreglo[]=array('id_padre'=>$rs['id_padre'],
            				 'Nombre'=>$rs['Nombre'],
							 'Apellido'=>$rs['Apellido']);
			
            }

	if(isset($arreglo)){
		$_SESSION['Usuario_padre']=$arreglo;
		header("Location: index.php");
	}else{
		header("Location: ../servicios.php?errorpa=''");
	}
?>

