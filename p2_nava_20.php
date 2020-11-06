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
				<h3>Problema 2 de Isaac Granados</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/acan.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p6_nava_20_php/ifelse.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						Este programa te muestra como insertar datos en un array y mostrar esos datos en pantalla
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>