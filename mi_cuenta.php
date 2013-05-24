<?php
	include 'validar_recordar.php';
	if(isset($_SESSION['usuario']))
	{
		$usuario=$_SESSION['usuario'];
		$nombre=$_SESSION['nombre'];
		$apellido=$_SESSION['apellido'];
		$correo=$_SESSION['correo'];
		$dni=$_SESSION['dni'];
		$genero=$_SESSION['genero'];
		$direccion=$_SESSION['direccion'];
		$display="none";
	}
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | 
	<?php 
	if(isset($_SESSION['usuario']))
	{
	echo $usuario;
	}
	else
	{
	echo "Mi Cuenta";
	}
	?>
	</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/mi_cuenta.css" rel="stylesheet" type"text/css">
	<link href="css/carrito.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	if(isset($_SESSION['usuario']))
	{
		?><h1>Mi cuenta</h1><?php
	}
	else
	{
		?><h1>Ingresa a tu cuenta</h1><?php
	}
	?>
<div id="micuenta" style="display:<?php if(!isset($_SESSION['usuario'])){ echo "none";}?>">
					<form action="cerrar_sesion.php" method="post">
						<table>
							<tr>
								<td>Usuario:</td>
								<td><?php echo $usuario ?></td>
							</tr>
							<tr>
								<td>Nombres:</td>
								<td><?php echo $nombre ?></td>
							</tr>
							<tr>
								<td>Apellidos:</td>
								<td><?php echo $apellido ?></td>
							</tr>
							<tr>
								<td>Sexo:</td>
								<td><?php echo $genero ?></td>
							</tr>
							<tr>
								<td>DNI:</td>
								<td><?php echo $dni ?></td>
							</tr>
							<tr>
								<td>Direcci&oacute;n:</td>
								<td><?php echo $direccion ?></td>
							</tr>
							<tr>
								<td>Correo:</td>
								<td><?php echo $correo ?></td>
							</tr>
							<tr>
								<td></td>
								<td><button value="Salir">Salir</button></td>
							</tr>
						</table>
						
					</form>
				</div>
<?php
				if(isset($_GET['error']) && $_GET['error']==1)
				{
					?><p style="color:red; font-size:20px; text-align:center"> Usuario no registrado, reg&iacute;strese, porfavor</p><?php
				}
			?>
<div id="form_ingresar" style="display:<?php echo $display ?>">

			<form action="ingresar_cuenta.php" method="post">
				<table>
					<tr>
						<td><label for="usuario">Usuario</label></td>
						<td><input type="text"name="usuario" /></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="checkbox" name="recordar" value="1" style="font-size:15px">No cerrar Sesi&oacute;n</input>
						<button type="submit" id="login">Ingresar</button>
						</td>
					</tr>
				</table>
				<p><a href="registrarse.php">&iquest;No tienes cuenta&#63; Reg&iacute;strate.</a><br/>
				<a href="recuperar_pass.php">&iquest;Olvidaste tu contrase&ntilde;a &#63;</a></p>
			</form>

		</div>	

	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>