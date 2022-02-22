<!DOCTYPE html>
<html>
<head>
    <!--<script  src="reCodigo.js"></script>-->

	<link rel="stylesheet icon" type="text/css" href="Icono.ico"><!--ICONO FALTANTE EN TODAS LAS PAGINAS-->
	<link rel="stylesheet" type="text/css" href="../../css.css">

	<meta charset="utf-8">
	<meta name="Indice del juego" content="Portale a todos las reglas">
	<title>DICE GAME index</title>
</head>
<body onload="color();">
    <center><h1>DICE GAME</h1></center>
    <?php include ('../../Reutilizar/nav.php');?>

	<div class="forma" id="indice">
		<h2 align="center">Indice</h2>
	
		<a href="#hoja de personajes">1: Hoja base de personaje		</a><br>
		<a href="#stats base">2: Niveles de Stats base      		</a><br>
		<a href="#titulos">3: Titulos					      		</a><br>
	
	</div>

    <!--Contenido-->
<p id="hoja de personajes"></p>
    <?php
     include ('../dirIndex/bestiasMkPHP.php');		?>

<p id="stats base"></p>
    <?php
     include ('dirEstadisticas/statsPHP.php');		?>
<p id="titulos"></p>
    <?php
     include ('dirEstadisticas/titulosPHP.php');	?>

</body>
</html>