<?php
	require_once('../conexion.php');
	if(!isset($_POST['Id_img']) & $_POST['nombreimg']){
		header("Location: ../home_page.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../../Images2/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../../Images2/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "../../Images2/" .$random.'_'. $_FILES["file"]["name"];

		      		  
            unlink("../../Images2/".$_POST['nombreimg']);           


			$sql_update = 'UPDATE slider_index SET Imagen = ? where Id_img = ?';

            $Id_IMG = isset($_POST['Id_img']) ?  $_POST['Id_img'] : '';
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $imagen,$Id_IMG));
            

            header('Location: ../home_page.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>