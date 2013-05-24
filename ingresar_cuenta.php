<?php
include 'validar_recordar.php';
$usuario=$_POST['usuario'];
$pass=$_POST['password'];
	$file=fopen('C:\xampp\htdocs\TuTicket\usuarios.data','r');
	while(!feof($file))
	{
		$linea=fgets($file);
		$partes=explode(':',$linea);
		if($partes[2]==$usuario && $partes[3]==$pass)
		{
			$_SESSION['nombre']=$partes[0];
			$_SESSION['apellido']=$partes[1];
			$_SESSION['usuario']=$partes[2];
			$_SESSION['genero']=$partes[4];
			$_SESSION['dni']=$partes[5];
			$_SESSION['direccion']=$partes[6];
			$_SESSION['correo']=$partes[7];
			if($_POST['recordar']==1)
			{
				$recordar_serializado=serialize($partes);
				function _enc($recordar_serializado)
				{
					for( $i = 0; $i < strlen($recordar_serializado); $i++ )
					{
						$r[] = ord($recordar_serializado[$i]) + 2;
					}
					return implode('.', $r);
				}
			setcookie("recordar",_enc($recordar_serializado),time()+3600*7);
			}
			header('Location:mi_cuenta.php');
			exit();
		}	
	}
header('Location:mi_cuenta.php?error=1');
?>