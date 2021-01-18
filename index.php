<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio - Lexeris</title>
	<meta name="description" content="Busca los mejores abogados en distintas especialidades, Lexeris soluciona exactamente el problema jurídico o consulta deseada.">
	<meta name="keywords" content="abogado, asesoria, consulta, problema, expertos, solución">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-styles-caller.php' ;?>
	<link rel="stylesheet" href="/src/css/index-style.css">
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/src/libs/owl-carousel/owl.carousel.min.css">

</head>

<body>

	<div class="container-fluid">

		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/header.php' ;?>

		<main class="row">
			<div class="col-12">

				<div class="row">
					<div class="col-12 col-md-10">

						<section class="row justify-content-center text-center my-3">
							<h3><b>HOY</b> MISMO EMPEZAMOS A SOLUCIONAR SU CASO</h3>
						</section>

						<section class="row pos-relative">
							<label for="" class="typing">
							</label>
							<form class="col-12 form-inline d-flex justify-content-center md-form form-sm mt-0">
								<svg style="width:24px;height:24px" viewBox="0 0 24 24">
									<path fill="currentColor"
										d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
								</svg>

								<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder=""
									id="search-box">
							</form>
						</section>

						<div class="my-5 pos-relative" id="temas-interes-container">

							<h4 class="my-3">Temas de interés:</h4>
							
							<div class="owl-carousel" id="tags-carousel">
								<span class="badge badge-pill mb-2 mb-md-0 ml-1">Contratos sociedades</span>
								<span class="badge badge-pill mb-2 mb-md-0">Procesos ejecutivos</span>
								<span class="badge badge-pill mb-2 mb-md-0 mr-1">Procesos declarativos</span>
							</div>
							<div class="btn-container">
								<div id="tags-btn-izq">
									<svg class="arrow" viewBox="0 0 24 24">
										<path d="M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M14,7L9,12L14,17V7Z" />
									</svg>
								</div>
								<div id="tags-btn-der">
									<svg class="arrow" viewBox="0 0 24 24">
										<path d="M2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12M10,17L15,12L10,7V17Z" />
									</svg>
								</div>
							</div>
						</div>


					</div>

					<aside class="col-12 col-md-2 " id="aside">
						<div class="row pos-relative align-items-center" >
							<div class="owl-carousel owl-theme" id="abogados-carousel">

								<div class="card-abogado" >
									<!-- <img class="img-abogado mb-2" src="https://cdn.pixabay.com/photo/2016/01/07/04/52/designer-1125324_960_720.jpg" alt="Card image cap"> -->
									<h5 class="mb-3" style="border-bottom: 1px solid #000; padding-bottom: 5px;">Abogados Ahora</h5>
									<p>
										<a href="https://wa.me/573124105114?text=Me%20interesa%20el%20servicio%20de%20tutela" target="_blank" class="btn btn-abogado">
											<svg style="width:13px;height:13px" viewBox="0 0 24 24">
												<path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
											</svg>
											<span>Tutelas o trámites jurídicos</span>
										</a>
										<a href="https://wa.me/573124105114?text=Me%20interesa%20el%20servicio%20de%derecho%20laboral" target="_blank" class="btn btn-abogado">
											<svg style="width:13px;height:13px" viewBox="0 0 24 24">
												<path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
											</svg>
											<span>Derecho laboral</span>
										</a>
										<a href="https://wa.me/573124105114?text=Me%20interesa%20el%20servicio%20de%procesos%20judiciales" target="_blank" class="btn btn-abogado">
											<svg style="width:13px;height:13px" viewBox="0 0 24 24">
												<path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
											</svg>
											<span>Procesos judiciales</span>
										</a>
									</p>
								</div>


							
	
							</div>

						</div>

						<div class="row pos-relative my-3">
							<div class="owl-carousel owl-theme" id="publicidad-carousel">
								<div>
									<img  src="/src/img/promocion.png" alt="" title="">
								</div>
							</div>
						</div>
					</aside>
				</div>

				<div class="row justify-content-center mt-3">
							<h3>NUESTROS SERVICIOS</h3>
						</div>

						<section class="row justify-content-around my-2">
							<div class="col-12 col-md-4">
								<a href="/nuestros-servicios/asesoria-personalizada/" class="row align-items-center justify-content-center servicio-item">
									
									<svg class="ico" viewBox="0 0 24 24">
										<path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
									</svg>
									<h5>
										Asesoría personalizada.
									</h5>
								</a>
							</div>
							<div class="col-12 col-md-4">
								<a href="/nuestros-servicios/asesoria-empresarial/" class="row align-items-center justify-content-center servicio-item">
									
									<svg class="ico" viewBox="0 0 24 24">
										<path d="M18,15H16V17H18M18,11H16V13H18M20,19H12V17H14V15H12V13H14V11H12V9H20M10,7H8V5H10M10,11H8V9H10M10,15H8V13H10M10,19H8V17H10M6,7H4V5H6M6,11H4V9H6M6,15H4V13H6M6,19H4V17H6M12,7V3H2V21H22V7H12Z" />
									</svg>
									

									<h5>
										Asesoría empresarial.
									</h5>

								</a>
							</div>
							<div class="col-12 col-md-3">
								<a href="/nuestros-servicios/tramite-judicial" class="row align-items-center justify-content-center servicio-item">
									
									<svg class="ico" viewBox="0 0 24 24">
										<path d="M17,21L14.25,18L15.41,16.84L17,18.43L20.59,14.84L21.75,16.25M12.8,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3H19C20.11,3 21,3.89 21,5V12.8C20.39,12.45 19.72,12.2 19,12.08V5H5V19H12.08C12.2,19.72 12.45,20.39 12.8,21M12,17H7V15H12M14.68,13H7V11H17V12.08C16.15,12.22 15.37,12.54 14.68,13M17,9H7V7H17" />
									</svg>
									
									<h5>
										Trámite judicial.
									</h5>

								</a>
							</div>
						</section>

				<section class="row mt-2" style="height: calc(100vh - 48.63px);">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/atESwB6GwfM" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</section>

				<section class="row justify-content-around my-5">
					<div class="col-12">
						<div class="row justify-content-center align-items-center text-center my-5">
							<h2>
								RAZONES PARA ESCOGERNOS
								<!-- <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="30px" height="60px" viewBox="0 0 69.000000 119.000000" preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,119.000000) scale(0.100000,-0.100000)" fill="#680000" stroke="none">
									<path d="M320 1183 c-32 -12 -50 -37 -50 -69 0 -31 -3 -33 -47 -43 -36 -7 -52 -7 -63 3 -15 12 -50 11 -50 -2 0 -4 16 -51 37 -104 33 -89 35 -99 21 -115 -31 -35 -31 -59 0 -95 l29 -33 -8 -155 c-7 -147 -24 -288 -38 -307 -3 -4 -19 -15 -36 -23 -17 -9 -31 -25 -33 -37 -2 -12 -19 -34 -38 -48 -30 -23 -35 -32 -32 -62 2 -26 11 -42 31 -57 27 -20 43 -21 265 -24 264 -4 315 1 343 29 27 27 25 82 -3 109 -12 11 -25 20 -29 20 -4 0 -10 14 -14 31 -5 22 -16 35 -40 45 -29 12 -35 21 -45 66 -16 75 -29 227 -30 332 0 82 2 90 25 112 30 28 32 60 5 89 l-21 22 40 102 c39 100 39 101 19 112 -17 9 -23 8 -30 -5 -6 -11 -17 -14 -34 -11 -13 3 -35 7 -49 10 -19 4 -25 12 -25 33 -1 52 -54 92 -100 75z m40 -59 c11 -12 11 -18 -2 -31 -19 -18 -38 -10 -38 16 0 33 20 40 40 15z m116 -107 c15 -15 -7 -18 -142 -15 -119 3 -135 5 -114 15 27 14 242 14 256 0z m-6 -76 c0 -4 -5 -22 -11 -40 l-11 -31 -104 0 -105 0 -15 35 c-7 19 -14 37 -14 40 0 3 59 5 130 5 72 0 130 -4 130 -9z m18 -138 c3 -10 -30 -13 -142 -13 -124 0 -146 2 -146 15 0 13 20 15 142 13 102 -2 143 -6 146 -15z m-46 -208 c6 -132 20 -266 34 -321 l6 -24 -136 0 c-155 0 -143 -9 -126 97 6 35 14 132 19 217 5 85 12 159 16 165 4 8 37 11 93 9 l87 -3 7 -140z m108 -410 c0 -16 -412 -13 -418 3 -3 10 40 12 207 10 132 -2 211 -7 211 -13z m67 -81 c15 -39 -19 -44 -277 -44 -258 0 -289 5 -274 43 6 15 30 17 275 17 241 0 270 -2 276 -16z"/>
									</g>
								</svg> -->
							</h2>
						</div>
					</div>
					<div class="col-12 col-md-4 align-items-center text-center my-3">
						<svg class="ico" viewBox="0 0 24 24">
							<path d="M15,4A8,8 0 0,1 23,12A8,8 0 0,1 15,20A8,8 0 0,1 7,12A8,8 0 0,1 15,4M15,6A6,6 0 0,0 9,12A6,6 0 0,0 15,18A6,6 0 0,0 21,12A6,6 0 0,0 15,6M14,8H15.5V11.78L17.83,14.11L16.77,15.17L14,12.4V8M2,18A1,1 0 0,1 1,17A1,1 0 0,1 2,16H5.83C6.14,16.71 6.54,17.38 7,18H2M3,13A1,1 0 0,1 2,12A1,1 0 0,1 3,11H5.05L5,12L5.05,13H3M4,8A1,1 0 0,1 3,7A1,1 0 0,1 4,6H7C6.54,6.62 6.14,7.29 5.83,8H4Z" />
						</svg>

						<h4>Asesorías rápidas</h4>

					</div>

					<div class="col-12 col-md-4 align-items-center text-center my-3">

						<svg class="ico" viewBox="0 0 24 24">
							<path d="M17,21L14.25,18L15.41,16.84L17,18.43L20.59,14.84L21.75,16.25M12.8,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3H19C20.11,3 21,3.89 21,5V12.8C20.39,12.45 19.72,12.2 19,12.08V5H5V19H12.08C12.2,19.72 12.45,20.39 12.8,21M12,17H7V15H12M14.68,13H7V11H17V12.08C16.15,12.22 15.37,12.54 14.68,13M17,9H7V7H17" />
						</svg>

						<h4>Documentos eficientes</h4>


					</div>

					<div class="col-12 col-md-4 align-items-center text-center my-3">
						<svg class="ico" viewBox="0 0 24 24">
							<path d="M13 11A3 3 0 1 0 10 8A3 3 0 0 0 13 11M13 7A1 1 0 1 1 12 8A1 1 0 0 1 13 7M17.11 10.86A5 5 0 0 0 17.11 5.14A2.91 2.91 0 0 1 18 5A3 3 0 0 1 18 11A2.91 2.91 0 0 1 17.11 10.86M13 13C7 13 7 17 7 17V19H19V17S19 13 13 13M9 17C9 16.71 9.32 15 13 15C16.5 15 16.94 16.56 17 17M24 17V19H21V17A5.6 5.6 0 0 0 19.2 13.06C24 13.55 24 17 24 17M7.34 8.92L8.5 10.33L3.75 15.08L1 12.08L2.16 10.92L3.75 12.5L7.34 8.92" />
						</svg>

						<h4>Abogados responsables</h4>

					</div>

					<div class="col-12 col-md-4 align-items-center text-center my-3">
						<svg class="ico" viewBox="0 0 24 24">
							<path d="M18.72,14.76C19.07,13.91 19.26,13 19.26,12C19.26,11.28 19.15,10.59 18.96,9.95C18.31,10.1 17.63,10.18 16.92,10.18C13.86,10.18 11.15,8.67 9.5,6.34C8.61,8.5 6.91,10.26 4.77,11.22C4.73,11.47 4.73,11.74 4.73,12A7.27,7.27 0 0,0 12,19.27C13.05,19.27 14.06,19.04 14.97,18.63C15.54,19.72 15.8,20.26 15.78,20.26C14.14,20.81 12.87,21.08 12,21.08C9.58,21.08 7.27,20.13 5.57,18.42C4.53,17.38 3.76,16.11 3.33,14.73H2V10.18H3.09C3.93,6.04 7.6,2.92 12,2.92C14.4,2.92 16.71,3.87 18.42,5.58C19.69,6.84 20.54,8.45 20.89,10.18H22V14.67H22V14.69L22,14.73H21.94L18.38,18L13.08,17.4V15.73H17.91L18.72,14.76M9.27,11.77C9.57,11.77 9.86,11.89 10.07,12.11C10.28,12.32 10.4,12.61 10.4,12.91C10.4,13.21 10.28,13.5 10.07,13.71C9.86,13.92 9.57,14.04 9.27,14.04C8.64,14.04 8.13,13.54 8.13,12.91C8.13,12.28 8.64,11.77 9.27,11.77M14.72,11.77C15.35,11.77 15.85,12.28 15.85,12.91C15.85,13.54 15.35,14.04 14.72,14.04C14.09,14.04 13.58,13.54 13.58,12.91A1.14,1.14 0 0,1 14.72,11.77Z" />
						</svg>

						<h4>Servicio al cliente</h4>

					</div>

					<div class="col-12 col-md-4 align-items-center text-center my-3">
						<svg class="ico" viewBox="0 0 24 24">
							<path d="M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4A2,2 0 0,1 2,19V8A2,2 0 0,1 4,6H8V4A2,2 0 0,1 10,2M14,6V4H10V6H14M10.5,17.5L17.09,10.91L15.68,9.5L10.5,14.67L8.41,12.59L7,14L10.5,17.5Z" />
						</svg>

						<h4>Servicio de calidad</h4>

					</div>

				</section>
			</div>


		</main>


		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/footer.php' ;?>

	</div>
	<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/commons/common-scripts-caller.php' ;?>
	<script src="/src/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="/src/js/index-script.js"></script>
</body>

</html>