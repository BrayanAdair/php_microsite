<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
	<meta name="generator" content="Astro v4.13.3">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">
	<title>home page</title>
	<meta name="description" content="Astro description">
	<link rel="stylesheet" href="/_astro/article.DOc-4UcP.css">
	<script type="module" src="/_astro/hoisted.De2duPkC.js"></script>
</head>
<?php
    $page_name = "Article";
    include '../panel/vistas/web/headerViews.php';
    include '../panel/utils/auth.php';
?>
<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
	
	<header class="container px-[5%] relative flex w-full justify-center gap-4 items-center my-8 font-bold">
		<div class="relative flex w-full justify-center gap-4 items-center my-8 font-bold"> <a href="/profile"
				class="sm:absolute flex gap-2 items-center text-base left-0"> <svg class="rotate-180"
					xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
					<path d="M1.4943 2L9.40845 9.91414L1.48101 17.8416" stroke="white" stroke-width="2.04849"
						stroke-linecap="round"></path>
				</svg>
				Back
			</a> <span class="text-nowrap 
text-xs md:text-base lg:text-3xl
">Plan Intermedio</span> <a href="/payment" class="curosor-pointer bg-gray-400 px-4 py-1 rounded-3xl  text-gray-100
			flex gap-4 items-center 
			text-nowrap text-xs md:text-sm lg:text-xl
			">
				Mejorar plan
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12" fill="none">
					<path d="M0.841248 5.35197L4.81398 1.37924" stroke="#575757" stroke-width="1.31575"></path>
					<path d="M7.86261 5.35216L3.88988 1.37943" stroke="#575757" stroke-width="1.31575"></path>
					<line x1="4.36167" y1="1.62137" x2="4.36167" y2="11.1086" stroke="#575757" stroke-width="1.31575">
					</line>
				</svg> </a> </div>
	</header>
	<section class="container px-[5%] ">
		<div class="flex flex-col lg:flex-row gap-10 md:gap-16 lg:text-2xl">
			<div class="text-center lg:w-2/3">
				<div class="aspect-video w-full my-8 lg:mt-0">
					<!-- <video class="rounded-xl w-full h-auto" src={"https://www.youtube.com/watch?v=eaRQF-7hhmo&pp=ygUOZ3ltIG1vdGl2YXRpb24%3D"} > -->
					<iframe class="rounded-xl" width="100%" height="100%"
						src="https://www.youtube.com/embed/eaRQF-7hhmo">
					</iframe> </div>
				<div class="flex gap-3 flex-col w-full lg:text-left">
					<h1 class="font-bebas text-[2.5rem] lg:text-7xl text-primary">Horem ipsum dolor sit amet</h1>
					<p class="text-white-300">consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,
						mattis tellus. Sed
						dignissim,
					</p>
				</div>
			</div>
			<p class="text-center lg:text-right leading-10 lg:w-1/3 text-white-300">
				Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis
				tellus.
				<br>
				Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed
				risus.
				<br>
				Maecenas eget condimentum velit, sit amet feugiat lectus.
				<br>
				Class aptent taciti sociosqu ad litora torquent per conubia nostra,
				per inceptos himenaeos.
			</p>
		</div>
	</section>
	<!-- PRUEBA RUTINA IA -->
	<button id="generarRutinaButton">Generar Rutina</button>
	<div id="resultadoRutina"><b>Aquí se mostrará la rutina generada</b></div>
	

	<!-- PRUEBA RUTINA IA -->
	<section class="container px-[5%] py-16  ">
		<h1 class="font-bebas text-[2rem] lg:text-6xl text-center mb-4">Resumen</h1>
		<div class="relative overflow-x-auto py-4 md:py-8 px-2 bg-gray-400 rounded-[10px] md:rounded-[1.9rem] mb-16 ">
			<table class="w-full text-sm text-left rtl:text-right 
			[&>th]:py-4
			[&>th]:px-1
			
			[&>th]:!text-center
			">
				<thead class="text-xs md:text-4xl  ">
					<tr>
						<th scope="col" class="text-center">
							Peso/Distancia
						</th>
						<th scope="col" class="text-center">
							Repeticiones
						</th>
						<th scope="col" class="text-center">
							Descansos
						</th>
						<th scope="col" class="text-center">
							Ejercicio
						</th>
					</tr>
				</thead>
				<tbody class="text-center text-[10px] md:text-3xl text-white-300 ">
					<tr class=" ">
						<th scope="row" class=" font-medium  whitespace-nowrap ">
							30kg
						</th>
						<td class="md:py-4">
							3 sets
						</td>
						<td class="md:py-4">
							1 min
						</td>
						<td class="md:py-4">
							Squads
						</td>
					</tr>
					<tr class="">
						<th scope="row" class=" font-medium  whitespace-nowrap ">
							30kg
						</th>
						<td class="md:py-4">
							3 sets
						</td>
						<td class="md:py-4">
							1 min
						</td>
						<td class="md:py-4">
							Squads
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex"> <a href="/" class="ml-auto flex gap-2 items-center text-base left-0">
				Siguiente entrenamiento
				<svg xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
					<path d="M1.4943 2L9.40845 9.91414L1.48101 17.8416" stroke="white" stroke-width="2.04849"
						stroke-linecap="round"></path>
				</svg> </a> </div>
	</section>
	<script src="../panel/assets/js/generarRutina.js"></script>
<?php
    include '../panel/vistas/web/footer.php';
?>
</body>

</html>