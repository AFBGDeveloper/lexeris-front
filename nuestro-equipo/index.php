<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuestro Equipo - Lexeris</title>
	<meta name="description"
		content="Busca los mejores abogados en distintas especialidades, Lexeris soluciona exactamente el problema jurídico o consulta deseada.">
	<meta name="keywords" content="abogado, asesoria, consulta, problema, expertos, solución">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php' ;?>
	<link rel="stylesheet" href="/src/css/ne-style.css">
</head>

<body>

	<div class="container-fluid">

		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row align-items-center" style="height: 70vh">
			<div class="col-12">
				<section class="row justify-content-center">
					<h2 class="text-center">NUESTRO EQUIPO</h2>
				</section>

				<section class="row justify-content-around my-5">
					<div class="nuestro-equipo-item">
							<a href="/nuestro-equipo/nuestros-abogados/">
								<svg class="ne-svg" viewBox="0 0 24 24">
									<path fill="currentColor"
										d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14Z" />
								</svg>
								<span>Nuestros Abogados</span>
							</a>

					</div>
					<div class="nuestro-equipo-item">
							<a href="/nuestro-equipo/nuestros-profesionales/">
								<svg class="ne-svg" viewBox="0 0 24 24">
									<path fill="currentColor"
										d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z" />
								</svg>
								<span>Nuestros Profesionales</span>
							</a>

					</div>
				</section>
			</div>


		</main>


		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>

	</div>
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php' ;?>
</body>

</html>