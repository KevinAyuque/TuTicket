<?php
	$mnombre=$_COOKIE['nombre'];
	$correo=$_COOKIE['correo'];
	$asunto=$_COOKIE['asunto'];
	$mensaje=$_COOKIE['mensaje'];
	function enviar_mensaje($nombre,$mensaje,$asunto,$correo)
	{
		if(isset($mensaje) && $mensaje=="")
		{
			header('Location:contactenos.php?error=1');
			exit();
		}
		$destinatario="jose.vc07@gmail.com";
		$cabeceras = "MIME-Version: 1.0\r\n";
		//Tipo de info
		$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
		//direccion del remitente
		$cabeceras .= "From: ".$nombre." <".$correo.">";
		if(mail($destinatario,$asunto,$mensaje,$cabeceras))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		//Enviar el estado del envio (por metodo GET ) y redirigir navegador al archivo index.php
        if(enviar_mensaje($nombre,$mensaje,$asunto,$correo))
		{
			header('Location: contactenos.php?conf=1');
			exit();
		}
		else
		{
			header('Location: contactenos.php?conf=2');
			exit();
		}
	setcookie("nombre",a,time()-3);
	setcookie("correo",a,time()-3);
	setcookie("asunto",a,time()-3);
	setcookie("mensaje",a,time()-3);
	header('Location:contactenos.php');
?>