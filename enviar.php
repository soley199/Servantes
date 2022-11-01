<?php 

$destino="cd.marco.0106@gmail.com";
$nombre=$_POST["nombre"];
$asunto=$_POST["asunto"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];

	$contenido="Nombre: " . $nombre . "\nCorreo: " . $email ."\nAsunto: ". $asunto."\nMensaje: ". $mensaje;

	mail($destino,"Contacto",$contenido);
	header("Location: contacto.php");

 ?>