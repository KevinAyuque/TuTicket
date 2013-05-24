<?php
	include 'validar_recordar.php';
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | Entradas para eventos de espect&aacuteculo</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="java/jquery.js"></script>
	<script src="java/jqFancyTransitions.js" type="text/javascript"></script>
	<script language="javascript">
	function initElement(){
		var t1 = document.getElementById("tabla_even_1");
		var t2 = document.getElementById("tabla_even_2");
		document.getElementById("recien_anadido").className = "ocultarTabla";
		t2.onclick= function(){
			document.getElementById("tabla_even_1").className = "";
			document.getElementById("tabla_even_2").className = "tablalinkseleccionado";
			document.getElementById("mas_esperado").className = "ocultarTabla";
			document.getElementById("recien_anadido").className = "";
		};
		t1.onclick= function(){
			document.getElementById("tabla_even_2").className = "";
			document.getElementById("tabla_even_1").className = "tablalinkseleccionado";
			document.getElementById("recien_anadido").className = "ocultarTabla";
			document.getElementById("mas_esperado").className = "";
		};
	}
	</script>
	
	
</head>
<body onload="initElement()";>
		<?php
		include 'cabecera.php';
		?>
				<div id="container_4">
					<div id="slideshowHolder" class="cuadro">
						
						<img src="eventos/b.jpg" alt="<div id='slideinfo'><h4>Beyonc&eacute;</h4></div>" /><a href="evento.php"></a>
						<img src="eventos/s.jpg" alt="<div id='slideinfo'><h4>Shakira</h4></div>" /><a href="evento.php"></a>
						<img src="eventos/dg.jpg" alt="<div id='slideinfo'><h4>Duelo de Gigantes</h4></div>" /><a href="evento.php"></a>
						<img src="eventos/ea.jpg" alt="<div id='slideinfo'><h4>El Apag&oacute;n</h4> </div>" /><a href="evento.php"></a>
						<img src="eventos/gm.jpg" alt="<div id='slideinfo'><h4>Gian Marco</h4> </div>" /><a href="evento.php"></a>
					</div>
					
					<script>
						$('#slideshowHolder').jqFancyTransitions({ 
							width: 560, 
							height: 300 ,
							delay:3500,
							navigation:false,
							effect: 'wave',
							links: true
						});
					</script>
				
					<div id="tabla_principal" class="cuadro">
						<nav>
							<a id="tabla_even_1" class="tablalinkseleccionado" >Lo más esperado</a> | 
							<a id="tabla_even_2" >Reci&eacuten añadido</a>
						</nav>
						<div id="mas_esperado">
							<div class="event">
								<a href="evento.php?id=0003">Beyoncé</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Shakira</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Duelo de gigantes</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">El Apag&oacute;n</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Gian Marco</a>
							</div>
						</div>
						
						<div id="recien_anadido">
							<div class="event">
								<a href="evento.php?id=0003">El apag&oacute;n</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Opci&oacute;n m&uacute;ltiple</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">#MelllegaAlTuitter</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Gian Marco</a>
							</div>
							<div class="event">
								<a href="evento.php?id=0003">Ciclo Sinfonico 2013</a>
							</div>
						</div>
					</div>
				</div>
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>