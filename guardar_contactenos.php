<?php
	session_start();
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	$asunto=$_POST['asunto'];
	if($asunto=="Seleccione" || $nombre=="" || $correo=="")
	{
		header('Location: contactenos.php?error=1');
		exit();
	}
	else
	{
		setcookie("asunto",$asunto,time()+3600*99999);
		setcookie("nombre",$nombre,time()+3600*99999);
		setcookie("correo",$correo,time()+3600*99999);
	}
	if(isset($mensaje) && $mensaje=="") 
	{	
		header('Location: contactenos.php?error=1');
		exit();
	}
	else
	{
		setcookie("mensaje",$mensaje,time()+3600*99999);
	}
	header('Location:confir_contact.php');
?>
