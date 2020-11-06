<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
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
				<h3>Problema 3 de Isaac Granados</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/acano.png" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p6_nava_20_php/elwhile.php";
					?>
					<h4>P3 Explicacion del codigo</h4>
					<p>
					Este programa cuenta las palabras que hay en las variable y te muestra un conteo en pantalla 
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>