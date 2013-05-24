<?php
	include 'validar_recordar.php';
	if(isset($_SESSION['usuario']))
	{
		$nombre=$_SESSION['nombre'];
		$correo=$_SESSION['correo'];
	}
	else
	{
		$nombre="";
		$correo="";
	}
	if(isset($_COOKIE['nombre']))
	{
		$nombre=$_COOKIE['nombre'];
	}
	else
	{
		$nombre="";
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
	<title>TuTicket | Cont&aacutectenos</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/contactenos.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	
	<h1>Cont&aacutectenos</h1>
	<?php 
										if(isset($_GET['error']) && $_GET['error']==1)
										{ ?> <p style="color:red">*Necesita llenar todos los campos.</p> 
										<?php  
										}
										if(isset($_GET['conf']) && $_GET['conf']==1)
										{ ?>
											<p> &iexcl;Su mensaje ha sido enviado!</p>
										<?php
										}
										if(isset($_GET['conf']) && $_GET['conf']==2)
										{ ?>
											<p style="color:red"> Su mensaje no ha podido ser enviado, por favor int&eacute;ntelo de nuevo.</p>
										<?php
										}
						?>
						<div id="contacto">
					<form action="guardar_contactenos.php" method="post">
						<table>
							<tr>
								<td>Asunto:</td>
								<td>
								<select name="asunto">
									<option value="Seleccione">Escoger</option>
									<option value="Consulta" <?php if(isset($_SESSION['asunto']) && $_SESSION['asunto']=="Consulta"){ echo "selected"; } ?> >Consulta</option>
									<option value="Sugerencia" <?php if(isset($_SESSION['asunto']) && $_SESSION['asunto']=="Sugerencia"){ echo "selected"; } ?> >Sugerencia</option>
									<option value="Queja" <?php if(isset($_SESSION['asunto']) && $_SESSION['asunto']=="Queja" ){ echo "selected"; } ?> >Queja</option>					
								</select>
								</td>
							</tr>
							<tr>
								<td>Nombre:</td>
								<td><input type="text" name="nombre" value="<?php echo $nombre ?>" /></td>
							</tr>
							<tr>
								<td>Correo:</td>
								<td><input  type="email" name="correo"value="<?php echo $correo ?>" /></td>
							</tr>
							<tr>
								<td>Mensaje:</td>
								<td><textarea name="mensaje"style="width:250px; height:150px;"></textarea></td>
							</tr>
							<tr>
								<td></td>
								<td><button type="submit">Enviar</button>
								<button type="reset">Borrar</button></td>
							</tr>
						</table>
					</form>
				</div>
	
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>