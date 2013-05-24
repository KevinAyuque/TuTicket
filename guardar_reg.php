<?php
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$genero=$_POST['genero'];
	$direccion=$_POST['direccion'];
	$pass1=$_POST['password1'];
	$pass2=$_POST['password2'];
	$dni=$_POST['dni'];
	$usuario=$_POST['usuario'];
	$correo=$_POST['correo'];
	$dia=$_POST['dia'];
	$mes=$_POST['mes'];
	$año=$_POST['año'];
	/*verificar vacios*/
	if($nombre=="" || $apellido==""  || $genero=="" || $direccion==""|| $pass1=="" || $pass2=="" || $correo=="" || $dni=="" || $usuario=="" || $dia=="diaN" || $mes=="mesN" || $año=="añoN")
	{
		header('Location:registrarse.php?error=1');
		exit();
	}
	else
	{
		/*verificar que no exista el correo en el fichero*/
		setcookie("genero",$genero,time()+3600*99999);
		setcookie("direccion",$direccion,time()+3600*99999);
		/*verificar dni*/
		if(is_numeric($dni))
		{
			if(strlen($dni)!=8)
			{
				header('Location:registrarse.php?error=4');
				exit();
			}
			else
			{
				setcookie("dni",$dni,time()+3600*9999999999999);
			}
		}
		else
		{
			header('Location:registrarse.php?error=4');
			exit();
		}
		/*verificar nombre y apellido sin caracters especiales*/
		if(ereg('[^A-Za-z]','',$nombre)) 
		{ 
			header('Location:registrarse.php?error=3');
			exit();
		}
		else
		{
			setcookie("nombre",$nombre,time()+3600*9999999999999);
		}
		if(ereg('[^A-Za-z]','',$apellido))
		{
			header('Location:registrarse.php?error=3');
			exit();
		}
		else
		{
			setcookie("apellido",$apellido,time()+3600*9999999999999);
		}
		/*verificar pass*/
		if($pass1!=$pass2)
		{
			header('Location:registrarse.php?error=5');
			exit();
		}
		$file=fopen('C:\xampp\htdocs\TuTicket\usuarios.data','r');
		while(!feof($file))
		{
			$linea=fgets($file);
			$partes=explode(':',$linea);
			if($partes[7]==$correo || $partes[2]==$usuario)
			{
				header('Location:registrarse.php?error=6');
				exit();
			}	
			else
			{
				setcookie("correo",$correo,time()+3600*99999);
				setcookie("usuario",$usuario,time()+3600*99999);
			}
		}
	}
	/*verificar fecha*/
		$fecha = checkdate ($mes,$dia,$año);
		if($fecha)
		{
			$fecha="$dia de $mes del $año";
			setcookie("fecha",$fecha,time()+3600*99999999999);
		}
		else
		{
			header('Location:registrarse.php?error=2');
			exit();
		}
	header('Location:confir_reg.php');
?>