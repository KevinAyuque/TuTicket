<?php
	include 'validar_recordar.php';
	if(isset($_SESSION['usuario']))
	{
		$displayR="none";
		$top="-400px";
	}
	else
	{
		header('Location:mi:mi_cuenta.php');
		exit();
	}
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | Carrito</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/carrito.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	<h1>Carrito de Compras</h1>
	<div id="tabla_compras" style="display:<?php if(!isset($_SESSION['usuario'])){echo 'none';} else{ echo 'block';?> margin-top:<?php echo $top; }?>">
			<table>
				<tr>
					<th>Evento</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>Evento</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Total</td>
				</tr>
				<tr>
					<td>Evento</td>
					<td>Precio</td>
					<td>Cantidad</td>
					<td>Total</td>
				</tr>
			</table>
		</div>
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>