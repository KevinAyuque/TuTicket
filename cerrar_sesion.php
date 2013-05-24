<?php
	session_start();
	if(isset($_SESSION['usuario']))
	{
		setcookie("recordar",a,time()-3600);
		unset($_SESSION['usuario']);
		unset($_SESSION['nombre']);
		unset($_SESSION['correo']);
		unset($_SESSION['apellido']);
		unset($_SESSION['dni']);
		unset($_SESSION['genero']);
		unset($_SESSION['direccion']);
		header('Location:mi_cuenta.php');
		exit();
	}

?>