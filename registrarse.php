<?php
include 'validar_recordar.php';
if(isset($_COOKIE['nombre']))
{
	$nombre=$_COOKIE['nombre'];
}
else
{
	$nombre="";
}
if(isset($_COOKIE['apellido']))
{
	$apellido=$_COOKIE['apellido'];
}
else
{
	$apellido="";
}
if(isset($_COOKIE['usuario']))
{
	$usuario=$_COOKIE['usuario'];
}
else
{
	$usuario="";
}
if(isset($_COOKIE['dni']))
{
	$dni=$_COOKIE['dni'];
}
else
{
	$dni="";
}
if(isset($_COOKIE['direccion']))
{
	$direccion=$_COOKIE['direccion'];
}
else
{
	$direccion="";
}
if(isset($_COOKIE['correo']))
{
	$correo=$_COOKIE['correo'];
}
else
{
	$correo="";
}

?> 

<!doctype html>
<html>
<head>
	<title>TuTicket | Registrarse</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/registrarse.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>

		<h1>Reg&iacute;strese</h1>
		<?php
						if(isset($_GET['error']) && $_GET['error']==1)
						{
						 ?> <p style="color:red">Complete los campos en blanco.</p>
						 <?php
						}
						if(isset($_GET['error']) && $_GET['error']==2)
						{
						?> <p style="color:red">Elegir una fecha y/o fecha incorrecta.</p>
						<?php
						}
						if(isset($_GET['error']) && $_GET['error']==3)
						{
							?><p style="color:red">Nombre y/o Apellido vac&iacute;os o con caracteres especiales.</p>
						<?php
						}
						if(isset($_GET['error']) && $_GET['error']==4)
						{
							?> <p style="color:red">Error en el DNI.</p>
						<?php
						}
						if(isset($_GET['error']) && $_GET['error']==5)
						{
							?> <p style="color:red">Passwords vac&iacute;as o no coinciden.</p>
						<?php
						}	
						if(isset($_GET['error']) && $_GET['error']==6)
						{
							?> <p style="color:red">Correo y/o usuario ya registrados, intente con otros.</p>
						<?php
						}	
					?>
		<div id="form_registrar">
			<form action="guardar_reg.php" method="post">
				<table>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="usuario"  value="<?php echo $usuario ?>" /></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password1" /></td>
					</tr>
					<tr>
						<td>Confirmar Password</td>
						<td><input type="password" name="password2" /></td>
					</tr>
					<tr>
						<td>Nombre Completo:</td>
						<td><input type="text" name="nombre" value="<?php echo $nombre ?>"/></td>
					</tr>
					<tr>
						<td>Apellido Completo:</td>
						<td><input type="text" name="apellido"value="<?php echo $apellido ?>" /></td>
					</tr>
					<tr>
						<td>Sexo:</td>
						<td><input type="radio" name="genero" value="M"  <?php if(isset($_COOKIE['genero']) && $_COOKIE['genero']=="M"){ echo "checked" ;}?>/>M
							<input type="radio" name="genero" value="F" <?php if(isset($_COOKIE['genero']) && $_COOKIE['genero']=="F"){ echo "checked" ;}?>/>F </td>
					</tr>
					<tr>
						<td>DNI:</td>
						<td><input type="text" name="dni" value="<?php echo $dni ?>"/></td>
					</tr>
					<tr>
						<td>Direcci&oacute;n:</td>
						<td><input type="text" name="direccion" value="<?php echo $direccion ?>" /></td>
					</tr>
					<tr>
						<td>Correo:</td>
						<td><input type="email" name="correo" value="<?php echo $correo ?>"/></td>
					</tr>
					<tr>
						<td>Fecha de nacimiento:</td>
						<td>
						<select name="dia">
							<option value="diaN">D&iacute;a</option>
							<?php
								
								for($i=1;$i<32;$i++)
								{?>
									<option value="<?php echo $i ?>"<?php if(isset($_CCOKIE['dia']) && $_COOKIE['dia']==$i){ echo "selected" ; } ?>> <?php echo $i ?> </option>
								<?php }
								?>
						</select>
						<select name="mes">
							<option value="mesN">Mes</option>
							<?php
								for($i=1;$i<13;$i++)
								{?>
									<option value="<?php echo $i ?>"<?php if(isset($_CCOKIE['mes']) && $_COOKIE['mes']==$i){ echo "selected" ; } ?>> <?php echo $i ?> </option>
								<?php }
								?>
						</select>
						<select name="año">
							<?php
								$anio=date("Y")-18;
								$anio1=date("Y")-100;
								?>
									<option value="añoN">A&ntilde;o</option>
								<?php
								for($i=$anio;$i>=$anio1;$i--)
								{?>
									<option value="<?php echo $i ?>" <?php if(isset($_CCOKIE['año']) && $_COOKIE['año']==$i){ echo "selected" ; } ?>> <?php echo $i ?> </option>
								<?php }
							?>
						</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" value="Registrar">Registrar</button>
						<button type="reset" value="Borrar">Borrar</button>
						</td>
					</tr>	
					</table>
				</form>
			</div>				

	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>