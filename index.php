<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
	<?php
    include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	
	<section class="contenido">
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
				¿Qué es lo que hace la instrucion echo()? 
				 Muestra informacion de salida 
				</p>
				<h4>Conclusiones </h4>
				<p>
				Echo nos ayuda a mostrar en pantalla<br>
				todo el texto o todo lo que escribamos<br>
				tambien se puede usar para mostrar la <br>
				suma de variables o para indicar <br>
				paoso para realizar una accion.  
				</p>
				<figure>
					<img src="imagenes/hola1.jpg" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Qué hace la sentencia IF…ELSE?
				 voy a investigar??
				 Primero revisa la condicion del if si no se cumple<br>
				 el codigo ejecuta el else.
				</p>
				<h4>Conclusiones </h4>
				<p>
				El ciclo if-else es<br>
				muy importante ya que<br>
				nos ayuda a que se cumplan<br>
				las condiciones que nosotros<br>
				le damos a la estructura.
				</p>
				<figure>
					<img src="imagenes/ifelse2.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				¿Como funciona el while? 
				  Esta estructura analiza que la condicion<br>
				  sea falsa para poder continuar
				 Explica el ciclo while?
				  While analiza que la condicion sea falsa si la condicion<br>
				  se cumple el ciclo se repetira en bucle hasta<br>
				  que la condicion sea falsa.
				</p>
				<h4>Conclusiones </h4>
				<p>
				Usar while nos ayudaria mucho<br>
				para examinar respuestas<br> 
                ejemplo tenemos una variable<br>
				con valor 1 y queremos identificar <br>
				si es menor a 5, entonces la condicion<br>
				seria: var<=5.
				</p>
				<figure>
					<img src="imagenes/while.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>