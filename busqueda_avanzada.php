<?php 
include 'validar_recordar.php';
?>
<!doctype html>
<html>
<head>
	<title>TuTicket | B&uacute;squeda Avanzada</title>
	<link rel="Shortcut Icon" href="favicon.ico"/>
	<link href="css/global.css" rel="stylesheet" type"text/css">
	<link href="css/contactenos.css" rel="stylesheet" type"text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$("#categoria").change(function(){
						var op = $(this).find("option:selected").val();
						$("#a1").text(op);
				});
		});
	</script>
</head>
<body>
	<?php
	include 'cabecera.php';
	?>
	
	<h1>B&uacutesqueda Avanzada</h1>
	<div id="busqueda_avanzada">
					<form action="eventos.php" method="get">
						<table>
							<tr>
								<td>Palabra clave:</td>
								<td><input  required type="text" name="" /></td>
							</tr>
							<tr>
								<td>Categor&iacutea </td>
								<td>
								<select id="categoria">
									<option value="seleccione">Escoger</option>
									<option value="musica">Musica</option>
									<option value="deportes">Deportes</option>
									<option value="teatro">Teatro</option>
									<option value="familia">Familia</option>
									<option value="cultura">Cultura</option>
								</select>
								</td>
							</tr>
							<tr>
								<td>Sub-Categor&iacutea </td>
								<td>
								<select>
									<option value="seleccione">Escoger</option>
									<option value="01"><div id="a1"></div></option>
									<option value="01"><div id="a2"></div></option>
									<option value="01"><div id="a3"></div></option>
									<option value="01"><div id="a4"></div></option>
									<option value="01"><div id="a5"></div></option>
								</select>
							</tr>
							<tr>
								<td>Local</td>
								<td>
								<select>
									<option value="seleccione">Escoger</option>
									<option value="01">Teatro Nacional</option>
									<option value="02">Estadio Nacional</option>
									<option value="03">Jockey Club del Per&uacute</option>
								</select>
							</tr>
							<tr>
								<td>Ciudad</td>
								<td>
								<select>
									<option value="seleccione">Escoger</option>
									<option value="01">Lima</option>
									<option value="02">Ancash</option>
									<option value="03">Apurimac</option>
									<option value="04">Arequipa</option>
									<option value="05">Ayacucho</option>
									<option value="06">Cajamarca</option>
									<option value="07">Prov. Const. Del Callao</option>
									<option value="08">Cusco</option>
									<option value="09">Huancavelica</option>
									<option value="10">Huanuco</option>
									<option value="11">Ica</option>
									<option value="12">Junin</option>
									<option value="13">La Libertad</option>
									<option value="14">Lambayeque</option>
									<option value="15">Loreto</option>
									<option value="16">Madre De Dios</option>
									<option value="17">Moquegua</option>
									<option value="18">Pasco</option>
									<option value="19">Piura</option>
									<option value="20">Puno</option>
									<option value="21">San Martin</option>
									<option value="22">Tacna</option>
									<option value="23">Tumbes</option>
									<option value="24">Ucayali</option>
									<option value="25">Amazonas</option>

								</select>
							</tr>
							<tr>
								<td></td>
								<td><button type="submit">B&uacute;squeda avanzada</button></td>
							</tr>
						</table>	
					</form>
				</div>

	
	<?php
		include 'pie_pagina.php';
	?>
</body>
</html>