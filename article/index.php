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
	<title>2Easy | Articolo</title>
	<meta name="description" content="Astro description">
	<link rel="stylesheet" href="/_astro/article.DOc-4UcP.css">
	<script type="module" src="/_astro/hoisted.De2duPkC.js"></script>

</head>
<?php
$page_name = "Article";
include '../panel/vistas/web/headerViews.php';
include '../panel/utils/auth.php';
?>

<body class="bg-gray-800 text-white font-urb w-full">

	<header class="container px-[5%] relative flex w-full justify-center gap-4 items-center my-8 font-bold">
		<div class="relative flex w-full justify-center gap-4 items-center my-8 font-bold"> <a href="/profile"
				class="sm:absolute flex gap-2 items-center text-base left-0"> <svg class="rotate-180"
					xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
					<path d="M1.4943 2L9.40845 9.91414L1.48101 17.8416" stroke="white" stroke-width="2.04849"
						stroke-linecap="round"></path>
				</svg>
				Indietro
			</a> <span class="text-nowrap 
text-xs md:text-base lg:text-3xl
">Piano intermedio</span> <a href="/payment" class="curosor-pointer bg-gray-400 px-4 py-1 rounded-3xl  text-gray-100
			flex gap-4 items-center 
			text-nowrap text-xs md:text-sm lg:text-xl
			">
			Migliorare il piano
				<svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 12" fill="none">
					<path d="M0.841248 5.35197L4.81398 1.37924" stroke="#575757" stroke-width="1.31575"></path>
					<path d="M7.86261 5.35216L3.88988 1.37943" stroke="#575757" stroke-width="1.31575"></path>
					<line x1="4.36167" y1="1.62137" x2="4.36167" y2="11.1086" stroke="#575757" stroke-width="1.31575">
					</line>
				</svg> </a> </div>
	</header>
	<section class="container px-[5%]">
		<div class="flex flex-col lg:flex-row gap-16 md:gap-16 lg:text-2xl">
			<div class="w-full flex flex-col">
				<div class="w-full flex flex-col lg:flex-row items-start gap-4 mb-16">
					<figure class="w-full lg:w-2/3 aspect-video col-span-6">
						<iframe class="rounded-xl" width="100%" height="100%"
							src="https://www.youtube.com/embed/eaRQF-7hhmo">
						</iframe>
					</figure>

					<p class="w-full lg:w-1/3 text-center lg:text-right leading-10 text-white-300">
						Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a,
						mattis
						tellus.
						<br>
						Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus
						elit sed
						risus.
						<br>
						Maecenas eget condimentum velit, sit amet feugiat lectus.
						<br>
						Class aptent taciti sociosqu ad litora torquent per conubia nostra,
						per inceptos himenaeos.
					</p>
				</div>

				<div class="flex flex-col items-start justify-start gap-4">
					<h1 class="font-bebas text-[2.5rem] lg:text-7xl text-primary">Horem ipsum dolor sit amet</h1>

					<button id="generarRutinaButton">Generare una routine</button>

					<p id="resultadoRutina" class="text-white-300">
						<!-- Resultado IA prueba -->

						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati distinctio voluptatem nisi,
						architecto quam, quisquam pariatur vel quos, facilis officiis maxime excepturi voluptatum optio
						dignissimos! Tempora cum dolorem, omnis ullam deleniti sunt eum earum velit suscipit error,
						aliquid odit, eius illo. Repellendus ipsam dolorum corrupti quisquam porro placeat cumque
						consequuntur similique, quo saepe commodi officia molestiae doloremque ea amet voluptas odio.
						Reprehenderit quisquam eum cumque culpa molestias fuga tenetur doloremque tempore sunt. Ex
						accusantium expedita perspiciatis veritatis consequatur mollitia deserunt. Voluptas alias magni
						quasi eum nemo beatae est explicabo illo nostrum ducimus iusto cum repudiandae, modi nam animi
						nisi numquam?

						<!-- Resultado IA prueba -->
					</p>
				</div>
			</div>

		</div>


	</section>


	<!-- PRUEBA RUTINA IA -->
	<section class="container px-[5%] py-16  ">
		<h1 class="font-bebas text-[2rem] lg:text-6xl text-center mb-4">Sintesi</h1>
		<div class="relative overflow-x-auto py-4 md:py-8 px-2 bg-gray-600 rounded-[10px] md:rounded-[1.9rem] mb-16 ">
			<table class="w-full text-sm text-left rtl:text-right 
			[&>th]:py-4
			[&>th]:px-1
			
			[&>th]:!text-center
			">
				<thead class="text-xs md:text-4xl  ">
					<tr>
						<th scope="col" class="text-center">
						Peso/distanza
						</th>
						<th scope="col" class="text-center">
						Ripetizioni
						</th>
						<th scope="col" class="text-center">
						Pausa
						</th>
						<th scope="col" class="text-center">
						Esercizio
						</th>
					</tr>
				</thead>
				<tbody class="text-center text-[10px] md:text-3xl text-white-300 ">
					<tr class=" ">
						<th scope="row" class=" font-medium  whitespace-nowrap ">
							30 KG
						</th>
						<td class="md:py-4">
							3 Sets
						</td>
						<td class="md:py-4">
							1 Min
						</td>
						<td class="md:py-4">
							Squadre
						</td>
					</tr>
					<tr class="">
						<th scope="row" class=" font-medium  whitespace-nowrap ">
							30 KG
						</th>
						<td class="md:py-4">
							3 Sets
						</td>
						<td class="md:py-4">
							1 Min
						</td>
						<td class="md:py-4">
							Squadre
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex"> <a href="/" class="ml-auto flex gap-2 items-center text-base left-0">
		Formazione successiva
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