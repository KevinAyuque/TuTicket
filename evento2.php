<?php
	include 'validar_recordar.php';
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | Evento</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="global.css" rel="stylesheet" type="text/css">
</head>
<body>
		<?php
		include 'cabecera.php';
		?>
	<h2>Vivo por el rock</h2>
	<div class="evento_img" id="evento_01_img">
	</div>
	Fotos:
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
		Proximas funciones:</br>
		<a href="#">Viernes 30 de febrero del 2013</a></br>
		<a href="#">Domingo 1 de agosto del 2078</a>
		<p>Descripcion asdadasdasasasasasasasasasasasasasasasassdadasdassdas</p>
		<p>mas adhawkrkjrbkrbehksrbsehmbsembrsejrbsejrbsehmrbsejrbsej </p>
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