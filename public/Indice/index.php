<!DOCTYPE html>
<html>
<head>
    <!--<script  src="reCodigo.js"></script>-->

	<link rel="stylesheet icon" type="text/css" href="Icono.ico"><!--ICONO FALTANTE EN TODAS LAS PAGINAS-->
	<link rel="stylesheet" type="text/css" href="../css.css">

	<meta charset="utf-8">
	<meta name="Indice del juego" content="Portale a todos las reglas">
	<title>DICE GAME index</title>
</head>
<body onload="color();">
    <center><h1>Reglas del juego</h1></center>
    <center><h3>DICE GAME</h3></center>
		
	<?php include ('navPHP.php');?><!--CREAR NAV DE TIENDAS-->
	
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
		include ('dirIndex/deseoPHP.php');			?>
	
	<?php 
		include ('dirIndex/reglasPHP.php');			?>
	
	<?php  
		include ('dirIndex/combatePHP.php');		?>
	
	<?php 
		include ('dirIndex/poderesPHP.php');		?>
	
	<?php 
		include ('dirIndex/turnosPHP.php');			?>
	
	<?php 
		include ('dirIndex/tiendasPHP.php');		?>
	
	<?php 
		include ('dirIndex/itemsMkPHP.php');		?>
	
	<?php 
		include ('dirIndex/dicePHP.php');			?>
	
	<?php 
		include ('dirIndex/distanciasPHP.php');		?>
		
	<?php 
		include ('dirIndex/dificultadPHP.php');		?>
	
	<?php 
		include ('dirIndex/bestiasMkPHP.php');		?>
	
	<?php 
		include ('dirIndex/glosarioPHP.php');		?>
</body>
</html>