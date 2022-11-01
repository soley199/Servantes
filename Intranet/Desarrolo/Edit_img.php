<?php
	require_once('../conexion.php');

	if(isset($_GET['uno'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_1 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//====================================================================================================================

	if(isset($_GET['uno_uno'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_1_1 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['uno_dos'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_1_2 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['dos'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_2 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['dos_uno'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_2_1 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['dos_dos'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_2_2 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['tres'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_3 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['tres_uno'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_3_1 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['tres_dos'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_3_2 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['cuatro'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_4 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['cuatro_uno'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_4_1 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
	if(isset($_GET['cuatro_dos'])){
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


			$sql_update = 'UPDATE desarrollo_pag SET img_4_2 = ? where id_desarrollo = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../Desarrollo.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	//==================================================================================================================
?>