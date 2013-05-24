<!doctype html>
<html>
<head>
	<title>TuTicket | Evento</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type="text/css">
	<link href="css/evento.css" rel="stylesheet" type="text/css">
</head>
<body>
		<?php
		include 'cabecera.php';
		?>
	<h1>Vivo por el rock</h1>
	<div class="evento_img" id="evento_01_img">
	</div>
	<h3>Fotos:</h3>
	<div id="evento_fotos">
	<?php
		$cant=6;
		for($i=1;$i<=$cant/2;$i++){
			?>
			<div class="evento_foto" id="evento01_foto<?php echo "$i" ?>">
			</div>
			<?php
		}
		?>
		</br>
		<?php
		for($i=($cant/2)+1;$i<=$cant;$i++){
			?>
			<div class="evento_foto" id="evento01_foto<?php echo "$i"?>">
			</div>
			<?php
		}
	?>
	</div>
	<div id="evento_desc">
		<strong>Proximas funciones:</strong>
		<a href="#">Viernes 30 de febrero del 2013</a></br>
		<a href="#">Domingo 1 de agosto del 2078</a></br>
		<strong>Descripci&oacute;n:</strong>
		<p>Grandes y reconocidos m&uacute;sicos y grupos de rock en espanol presentes.
		Vive junto con nosotros del mejor repertorio nacional</p>
	</div>
	<div id="evento_links">
		Links:</br>
		<a href="#">Pagina Oficial</a></br>
		<a href="#">Facebook</a></br>
	</div>
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>