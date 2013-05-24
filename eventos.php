<?php
	include 'validar_recordar.php';
	$search_s=false;
	if(isset($_GET['search'])){
		$search_s=true;
		$search_v=$_GET['search'];
	}
?>

<!doctype html>
<html>
<head>
	<?php
	
	if($search_s==true){ ?>
		<title>TuTicket | "<?php echo $search_v ?>" </title><?php
	}
	else{?>
		<title>TuTicket | Eventos</title><?php
	}
	?>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	
	
	<?php
	if($search_s==true){?>
	<h1>Resultados para: "<?php echo $_GET['search'] ?>" </h1>
	<?php
	}
	if($search_s==false && !isset($_GET['categoria'])){
	?>
	<h1>Eventos</h1>
	<div class="cuerpo">
		<a href="evento.php?id=0001"><div class="cuadrado">Aqui ira el flyer del evento</div></a>
		<a href="evento.php?id=0001"><div class="cuadrado">Aqui ira el flyer del evento</div></a>
		<a href="evento.php?id=0001"><div class="cuadrado last">Aqui ira el flyer del evento</div></a>
		<a href="evento.php?id=0001"><div class="cuadrado">Aqui ira el flyer del evento</div></a>
		<a href="evento.php?id=0001"><div class="cuadrado">Aqui ira el flyer del evento</div></a>
		<a href="evento.php?id=0001"><div class="cuadrado last">Aqui ira el flyer del evento</div></a>
		
	</div>
	<?php }
	?>
	<?php if(isset($_GET['categoria'])){
		$cat=$_GET['categoria'];		
		include "categoria/$cat.php";
	} ?>
		
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>