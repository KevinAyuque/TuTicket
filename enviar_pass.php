<?php 
	/*verificar la data*/
	if($_POST['usuario']=="" || $_POST['correo']=="")
	{
		header('Location:recuperar_pass.php?error=1');
		exit();
	}
	else
	{
		$usuario=$_POST['usuario'];
		$correo=$_POST['correo'];
	}
	/*funcion para buscar contraseña del correo, eliminarla*/
	/*crear una nueva pass para enviarsela*/
	function crear_pass()
	{
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cad = "";
		for($i=0;$i<12;$i++) 
		{
			$cad .= substr($str,rand(0,62),1);
		}
		return $cad;
	}
	/*funcion para poner la nueva contraseña*/
	
	function enviar_pass($correo,$password)
		{
			$destinatario=$correo;
			$cabeceras = "MIME-Version: 1.0\r\n";
			//Tipo de info
			$cabeceras .= "Content-type: text/html; charset=iso-8859-1\r\n";
			//direccion del remitente
			$cabeceras .= "From: "."Tu Ticket"." <"."tuticket@gmail.com".">";
			if(mail($destinatario,$nueva_pass,$cabeceras))
			{
				return $seEnvio = true;
			}
			else
			{
				return $seEnvio = false;
			}
		}
	if(enviar_pass($correo,$password))
	{
        header('Location: recuperar_pass.php?conf=1');
		exit();
	}
	else
	{
        header('Location: recuperar_pass.php?conf=2');
		exit();
	}
?>