<!DOCTYPE html>
<html>
<head>
    <!--<script  src="reCodigo.js"></script>-->

	<link rel="stylesheet icon" type="text/css" href="Icono.ico"><!--ICONO FALTANTE EN TODAS LAS PAGINAS-->
	<link rel="stylesheet" type="text/css" href="css.css">

	<meta charset="utf-8">
	<meta name="Indice del juego" content="Portale a todos las reglas">
	<title>DICE GAME index</title>
</head>
<body onload="color();">
    <center><h1>Reglas del juego</h1></center>
    <center><h3>DICE GAME</h3></center>
		
	<?php include ('Reutilizar/navIndice.php');?><!--CREAR NAV DE TIENDAS-->
	
	<div id="indice">
		<h2 align="center">Indice</h2>
	
		<a href="#deseo"     >1 : Valores del DESEO          </a><br>
		<a href="#rules"     >2 : Reglas en general          </a><br>
		<a href="#combate"   >3 : Reglas de combate          </a><br>
		<a href="#poderes"   >4 : Reglas para crear poderes  </a><br>
		<a href="#turnos"    >5 : Reglas de turnos           </a><br>
		<a href="#tiendas"   >6 : Reglas de tiendas          </a><br>
		<a href="#items"     >7 : Reglas de creación de items</a><br>
		<a href="#dice"      >8 : Reglas de DICE             </a><br>
		<a href="#distancias">9 : Reglas de distancias       </a><br>
		<a href="#dificultad">10: Reglas de dificultad       </a><br>
		<a href="#bestias"   >11: Reglas para crear bestias  </a><br>
		<a href="#glosario"  >12: Glosario                   </a><br>
	
	</div>

	<!--Contenido-->
	<?php 
		include ('Indice/dirIndex/deseoPHP.php');			?>
	
	<?php 
		include ('Indice/dirIndex/reglasPHP.php');			?>
	
	<?php  
		include ('Indice/dirIndex/combatePHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/poderesPHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/turnosPHP.php');			?>
	
	<?php 
		include ('Indice/dirIndex/tiendasPHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/itemsMkPHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/dicePHP.php');			?>
	
	<?php 
		include ('Indice/dirIndex/distanciasPHP.php');		?>
		
	<?php 
		include ('Indice/dirIndex/dificultadPHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/bestiasMkPHP.php');		?>
	
	<?php 
		include ('Indice/dirIndex/glosarioPHP.php');		?>
</body>
</html>