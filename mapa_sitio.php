<?php
	include 'validar_recordar.php';
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | Mapa del Sitio</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/mapa_site.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>

	<h1>Mapa del Sitio</h1>
	<div id="mapa_sitio1">
					<ul>
						<h2>General</h2>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="evento.php">Eventos</a></li>	
						<li><a href="contactenos.php">Cont&aacute;ctenos</a></li>
						<li><a href="preguntas_frecuentes.php">Preguntas Frecuentes</a></li>
						<li><a href="busqueda_avanzada.php">B&uacute;squeda avanzada</a></li>
						<li><a href="mapa_sitio.php">Mapa del Sitio</a></li>
						
						<h2>Usuario</h2>
						<li><a href="mi_cuenta.php">Mi Cuenta</a></li>
						<li><a href="carrito.php">Carrito de Compras</a></li>	
					</ul>
				</div>
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>