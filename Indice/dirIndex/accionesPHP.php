<div class="body" id="combate">
	<p>HOLA REGLAS:Acciones</p>
	<h1 class="li" id="descripción" align="center">
		Acciones
	</h1>

	<div id="indice_1">
		<a href="#atacar">-Atacar</a>
		<br>
		<a href="#dañar">-Dañar</a>
		<br>
		<a href="#defender">-Defender</a>
		<br>
		<a href="#defensa">--Reducir daño</a>
		<br>
		<a href="#contratacar">-Contra atacar</a>
		<br>
		<a href="#defender">-Esquivar</a>
		<br>
		<a href="#envoscado">-Defender envoscadas</a>
		<br>
		<a href="#buscar">-Buscar</a>
		<br>
		<a href="#estudiar">-Estudiar</a>
	</div>
<!--------------------------------------------------------------------------->
	<p>Todas las personas tienen una hoja de personaje que cuenta con: HP; +ATK; ATK%; +DEF/+DEA; DEF%; +INT; MOV.<br>[las cosas entre parentesis son ejemplos]</p>

<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		Es tu salud<br>
		Como buen humano hijo de buena madre, estás dotado de una gran salud, pero siempre hay gente más sana que vos. La vida total mínima es 100. Se considera que es 100%. Hay otros que pueden tener 200%p>
	<p class="li" id="dañar">
			<---->Recibir daño: HP.Actual[200%]-DAÑO[ATK%-(ATK%*(DEF%/100) )]
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		+ATK Es tu precisión<br>
		Si subes tu velocidad, puedes incrementar: Presión, Daño, Defensa por reacción.<br>
		Es decir: si subes la velocidad de tus ataques o presición, consigues más +ATK, que te da más xD6 para impactar contra tu enemigo. Un humano normal tiene 2d6 de presión base.
	</p>
	<p class="li" id="atacar">
			<---->Atacar: +ATK[2d6=4 éxitos] VS +DEF[1d6=2 éxitos]
			<br>
			<--Si-->+ATK= Critico o +ATK[2d6=6]>+DEF[1d6=2]
			<br>
			<---->Haces DAÑO
			<br>
			<--Si-->+ATK y +DEF = Critico, o +DEF==+ATK
			<br>
			<---->No impactas
	</p>
	<p class="li" id="contratacar">
		<--Si--> Contra atracas
	<br>
		<---->+ATK vs +ATK
	<br>
		<--Si-->Uno de los 2 saca más éxitos que el otro.
	<br>	
		<---->El que gana hace el impacto
	<br>	
		<--Si-->Empatan
	<br>
		<---->Ambos impactan Y no se reduce el daño
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
	<p class="li" id="defender">
			<--Si-->Te atacan declaras si Defiendes, Esquivas o Contra atacas. No se puede esquivar y atacar. Eso es contra atacar.
			<br>
			<---->Tiras +DEA[1d6] Para esquivar
			<br>
			<---->Tiras +DEF[1d6] Para Defender
			<br><br>
			<--Si-->+DEF= Critico[el número máximo al que puede llegar una tirada] o +DEF[1d6=1]>+ATK[2d5=0]
			<br>
			<---->No impactas. Lo mismo si es DEA
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		DEF% es un tipo de defensa física.<br>
		Cuando peleamos, es inevitable recibir un golpe o 2, pero si tu piel se corta con un papel, y te desangras con un pinchazo, significa que cualquier golpe te hará mucho daño, pero si tienes armadura, tu piel está curtida y no te desangras fácilmente, claro está que aguantarás un porcentaje mayor de daño.
	</p>
	<p class="li" id="defensa">
			<--Si-->Te hacen daño
			<br>
			<---->Tiras DEF%[1d6=6%] + DEF%.BASE[10%] + EXTRAS%[0] => DEF%/100[16/100=0.16]
			<br>
			<---->Daño recibido= ATK%-(ATK%*0.16)
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		Es tu persepción ante pequeños detalles<br>
		Sirve para buscar objetos, estudiar nuevas tecnicas y para notar emboscadas.<br>
		Lo basico son 2d6.
	</p>
	<p class="li" id="envoscado">
			<--Si-->Te envoscan
		<br>
			<---->Tiras +INT vs +DEA
		<br>
			<--Si-->Ganas
		<br>
			<---->Esquivas, defiendes o contra atacas.	
	</p>
	<p class="li" id="buscar">
			<--Si-->Buscas
			<---->Tiras +INT vs DC		
	</p>
	<p class="li" id="estudiar">
			<--Si-->Estudias
		<br>	
			<---->Declaras cuantos puntos de acción gastas en estudiar y tiras +INT.
		<br>	
			<--Si-->Salvas
		<br>	
			<---->Inviertes esos AP en estudiar.
		<br>	
			<--Si-->Fallas
		<br>	
			<---->Gastas esos AP pero no avanzas en tus estudios.
		<br>
			<--Si-->Critico
		<br>	
			<---->Gastas los AP declarados, pero invierte el doble
		<br>	
			<--Si-->Pifia
		<br>
			<---->Elige el master, pero, como mucho: olvidas la mitad de los AP declarados para estudio. Si estudiaste 10 y declaraste 4, tu progreso recula hasta 8.
	</p>
<!--------------------------------------------------------------------------->
	<p class="li" id="descripción">
	<img class="box" src="Reutilizar/Imagenes Reglas/HP.png" align="left">
		Es tu velocidad de desplazamiento<br>
		El mapa es muy grandes y no te puedes recorrer todo el mapa en un misero turno, así que tienes que gastar puntos de movimiento.
		<br>En el mapa mundi cada casilla representa 5 reales.
	</p>
<!--------------------------------------------------------------------------->
		<h1 class="li" id="descripción" align="center">
			EJEMPLO DE COMBATE
		</h1>
<!--------------------------------------------------------------------------->
	<p class="li">
		Hay dos PJs: Atacante(A) y Defensor(D)<br>
		A: Le doy un puñetazo en la cara<br>
		Tira: su +ATK=2d6<br>
		D: Yo elijo contra atacar<br>
		Tira: su +ATK=2d6
<br>
		Comparan: A sacó 2 éxitos y D sacó 2 éxito; Empatan.
<br>Ambos jugadores<br>
		Impacto= "ATK%-(ATK%*(DEF%/100))"= 2d6%-(2d6%*((2d6%+10%)/100))<br>
		ATK% propio vs DEF% del adversario.
		<br><br>
		En caso de sólo ganar uno de los 2, sólo uno de los 2 impacta. En caso de ambos sacar pifia, ambos erran.
	</p>
		<p class="li">
		Hay dos PJs: Atacante(A) y Defensor(D)<br>
		A: Le doy un puñetazo en la cara<br>
		Tira: su +ATK=2d6<br>
		D: Yo elijo contra atacar<br>
		Tira: su +ATK=1d6
<br>
		Comparan: A sacó 1 éxitos y D sacó 1 éxito; D gana.
<br>
		No impacta.<br><br>
		En caso de A ganar, se hace un impacto.
	</p>
</div>
