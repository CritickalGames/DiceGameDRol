<div class="body" id="combate">
	<p>HOLA REGLAS:Combate</p>
	<p>Todas las personas tienen una hoja de personaje que cuenta con: HP; +ATK; ATK%; +DEF/+DEA; DEF%; MOV.<br>[las cosas entre parentesis son ejemplos]</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		Es tu salud<br>
		Como buen humano hijo de buena madre, estás dotado de una gran salud, pero siempre hay gente más sana que vos. La vida total mínima es 100. Se considera que es 100%. Hay otros que pueden tener 200%p>
	<p class="li">
			<---->Recibir daño: HP.Actual[200%]-DAÑO[ATK%-(ATK%*(DEF%/100) )]
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		+ATK Es tu precisión<br>
		Si subes tu velocidad, puedes incrementar: Presión, Daño, Defensa por reacción.<br>
		Es decir: si subes la velocidad de tus ataques o presición, consigues más +ATK, que te da más xD6 para impactar contra tu enemigo. Un humano normal tiene 2d6 de presión base.
	</p>
	<p class="li">
			<---->Atacar: +ATK[2d6=12] VS +DEF[1d6=6]
			<br>
			<--Si-->+DEF= Critico[el número máximo al que puede llegar una tirada] o +DEF[1d6=5]>+ATK[2d5=2]
			<br>
			<---->No impactas.
			<br>
			<--Si-->+ATK= Critico o +ATK[2d6=6]>+DEF[1d6=2]
			<br>
			<---->Haces DAÑO
			<br>
			<--Si-->+ATK y +DEF = Critico, o +DEF==+ATK
			<br>
			<---->No impactas
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		ATK% es para que, cuando impactes con tu presición, causes daño<br>
		De base tienes 2d6% y el daño es igual a lo que salga de resultado en esa tirada + los extras.
	</p>
	<p class="li">
			<--Si-->Impactasté.
			<br>
			<---->Tiras ATK%[2d6%=5%] y haces DAÑO como lo dice en HP.
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		+DEF/+DEA es tu aguante o fácilidad de esquiva cuando te atacan. Son cosas distintas.<br>
		Las defensas marciales(judo) son +DEF.<br>
		Si en combate decides defender con defensa bruta, y salvas, el impacto no te hizo daño.<br>
		Las esquivas son +DEA<br>
		Si te defiendes con agilidad y salvas, significa que esquivaste el ataque.
		<br>Cuando defiendes, primero declara qué tipo usar: agilidad +DEA o fuerza bruta +DEF.
	</p>
	<p class="li">
			<--Si-->Te atacan declaras si Defiendes, Esquivas o Contra atacas. No se puede esquivar y atacar. Eso es contra atacar.
			<br>
			<---->Tiras +DEA[1d6]/+DEF[1d6]/+ATK[+ATK/2 redondeo hacia arriba]
			<br>
			<---->Se aplican las reglas de "Atacar" en "+ATK"
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		DEF% es un tipo de defensa física.<br>
		Cuando peleamos, es inevitable recibir un golpe o 2, pero si tu piel se corta con un papel, y te desangras con un pinchazo, significa que cualquier golpe te hará mucho daño, pero si tienes armadura, tu piel está curtida y no te desangras fácilmente, claro está que aguantarás un porcentaje mayor de daño.
	</p>
	<p class="li">
			<--Si-->Te hacen daño
			<br>
			<---->Tiras DEF%[1d6=6%] + DEF%.BASE[10%] + EXTRAS%[0]=x/100[16/100=0.16]
			<br>
			<---->Daño recibido= ATK%-(ATK%*0.16)
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		Es tu velocidad de desplazamiento<br>
		El mapa es muy grandes y no te puedes recorrer todo el mapa en un misero turno, así que tienes que gastar puntos de movimiento.
		<br>En el mapa mundi cada casilla representa 5 reales.
	</p>
</div>
