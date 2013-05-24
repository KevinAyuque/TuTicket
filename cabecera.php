<?PHP
	date_default_timezone_set ('america/lima');
	$dia=array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
	$mes=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
	$año=date('Y');
	$fecha = date('d');
	$numDia = date('N');
	$numMes = date('n');
	$fechaCompleta=$dia[$numDia-1] . " , " . $fecha . " de " . $mes[$numMes-1]  . " del " . $año;	
	if(isset($_SESSION['usuario']))
	{
		$micuenta=$_SESSION['usuario'];
		$pagina="carrito.php";
	}
	else
	{
		$micuenta="Login";
		$pagina="mi_cuenta.php";
	}
	?>
<div id="container">
	<header id="cabecera">
		<h1>
		<a href="index.php">
			<img id="logo" src="img/logo.png" alt="TuTicket">
		</a>
		</h1>
		<div id="fecha">
			<p><?php echo $fechaCompleta ?></p>
		</div>
		<nav id="nav_busqueda">
			<a href="busqueda_avanzada.php">B&uacutesqueda avanzada</a> |
			<a href="mi_cuenta.php"><?php echo $micuenta ?></a>
			<a href="<?php echo $pagina ?>" >| 0 <img style="padding:0px; margin:0px;position:relative; right:0px;bottom:0px; "src="img/carrito.png" ></a> 
		</nav>
		<div id="barra_principal">
			<nav id="nav_principal">
				<a href="index.php">Inicio</a>
				<a href="eventos.php" target="_self" >Eventos</a>
				<a href="contactenos.php">Cont&aacutectenos</a>	
				<a href="preguntas_frecuentes.php">Preguntas Frecuentes</a>
			</nav>
				
			<form id="busqueda" action="eventos.php" method="get">
				<input type="search" id="busqueda_label" placeholder="Buscar Evento"
				<?php
				#Si esta en la pagina de busqueda, el input toma el valor de la busqueda.
					if(isset($search_s)){
						if($search_s==true){
						?>value="<?php echo $search_v ?>"<?php
						}
					}
				?>
				
				 name="search">
				<input type="submit" value="" id="buscarSubmit" >
			</form>
		</div>
	</header>
	<div id="container_2">
	<?php
	include 'menu_vertical.php';
	?>
		<div id="container_3">
		<?php
		if(strpos($_SERVER["REQUEST_URI"], 'evento.php') != true){
		?>
		<div id="container_4">
		<?php }
		?>