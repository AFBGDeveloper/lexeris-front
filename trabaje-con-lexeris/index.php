<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trabaje con Lexeris - Lexeris</title>
	<meta name="description" content="Busca los mejores abogados en distintas especialidades, Lexeris soluciona exactamente el problema jurídico o consulta deseada.">
	<meta name="keywords" content="abogado, asesoria, consulta, problema, expertos, solución">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php' ;?>

</head>

<body>

	<div class="container-fluid">

		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row">
			<div class="col-12">
				<section class="row justify-content-center text-center">
					<div class="col-12">
						<h2>TRABAJE CON LEXERIS</h2>

						<p>
							Señor/a abogado(a) o contador(a), Lexeris es una gran oportunidad para desempeñar su
							profesión
							¡Bienvenido/a!
							<!-- Duda aquí exigir texto -->
						</p>
					</div>
				</section>

				<form>
					<div class="form-group mt-2">
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							placeholder="Nombres">
					</div>

					<div class="form-group mt-2">
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
					</div>



					<select class="form-control mt-2" name="" id="">
						<option>Área</option>
						<option>Especialidad de derecho</option>
						<option>Empresas y negocios</option>
						<option>Pymes y startups</option>
						<option>Laboral</option>
						<option>Familia</option>
						<option>Tributario</option>
						<option>Procesal</option>
					</select>

					<select class="form-control my-2" name="" id="res">
					</select>

					<input type="file" name="" id="">

					<button type="submit" class="my-2 form-control btn btn-enviar">Enviar</button>
				</form>

			</div>

		</main>


		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>

	</div>
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php' ;?>
</body>

</html>