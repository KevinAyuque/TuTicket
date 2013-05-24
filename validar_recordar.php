<?php
	session_start();
	if(isset($_COOKIE['recordar']))
	{
		$cookie=$_COOKIE['recordar'];
		function _dec($cookie)
		{
			$cookie = explode(".", $cookie);
			for( $i = 0; $i < count($cookie); $i++ )
				$cookie[$i] = chr($cookie[$i] - 2);
			return implode('', $cookie);
		}
		$partes=unserialize(_dec($cookie));
		$_SESSION['nombre']=$partes[0];
		$_SESSION['usuario']=$partes[2];
		$_SESSION['correo']=$partes[7];
		$_SESSION['apellido']=$partes[1];
		$_SESSION['genero']=$partes[4];
		$_SESSION['dni']=$partes[5];
		$_SESSION['direccion']=$partes[6];
	}
?>