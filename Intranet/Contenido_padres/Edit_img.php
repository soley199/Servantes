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


			$sql_update = 'UPDATE contenido_padres SET 	img_1 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================
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


			$sql_update = 'UPDATE contenido_padres SET 	img_2 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================

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


			$sql_update = 'UPDATE contenido_padres SET 	img_3 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================
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


			$sql_update = 'UPDATE contenido_padres SET 	img_4 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================

if(isset($_GET['sinco'])){

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


			$sql_update = 'UPDATE contenido_padres SET 	img_5 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================
if(isset($_GET['seis'])){

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


			$sql_update = 'UPDATE contenido_padres SET 	img_6 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}
//==========================================================================================================

//2_1==========================================================================================================

	if(isset($_GET['des_uno'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_descarga_1 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	if(isset($_GET['img_uno'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_1 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

//2_2==========================================================================================================

	if(isset($_GET['des_dos'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_descarga_2 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	if(isset($_GET['img_dos'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_2 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

//2_3==========================================================================================================

	if(isset($_GET['des_tres'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_descarga_3 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	if(isset($_GET['img_tres'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_3 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

//2_4==========================================================================================================

	if(isset($_GET['des_cuatro'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_descarga_4 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	if(isset($_GET['img_cuatro'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_4 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

//2_5==========================================================================================================
	if(isset($_GET['des_sinco'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_descarga_5 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

	if(isset($_GET['img_sinco'])){

		$allowedExts = array("gif", "pdf", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "application/pdf")
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


			$sql_update = 'UPDATE contenido_padres SET 	Mod_img_5 = ? where id_con_pa = 1';

            $img_1 = $imagen;
            $statement_update = $pdo -> prepare($sql_update);
            $statement_update -> execute(array( $img_1));
            

            header('Location: ../contenido.php');
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }
		
	}

//=============================================================================================================






