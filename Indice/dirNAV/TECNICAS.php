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
    <?php
        include ('../../Reutilizar/nav.php');
    ?>

	<div id="indice">
		<h2 align="center">Indice</h2>

		<a href="#deseo"     >1 : Valores del DESEO          </a><br>

	</div>

    <!--Contenido-->
    <?php
   		include ('dirTecnicas/dominioControlEnergiaPHP.php');       ?>

    <?php
   		include ('dirTecnicas/respiraciónPHP.php');       ?>

</body>
</html>