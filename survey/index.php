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
    <style>
        input[data-astro-cid-6wvssxk3] {
            display: block;
            width: 100%;
            border-radius: .5rem;
            border-color: transparent;
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            padding: .625rem;
            font-size: .875rem;
            line-height: 1.25rem;
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        input[data-astro-cid-6wvssxk3]:focus {
            --tw-border-opacity: 1;
            border-color: rgb(59 130 246 / var(--tw-border-opacity));
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity))
        }

        @media (prefers-color-scheme: dark) {
            input[data-astro-cid-6wvssxk3] {
                --tw-bg-opacity: 1;
                background-color: rgb(var(--dark-2) / var(--tw-bg-opacity));
                --tw-text-opacity: 1;
                color: rgb(var(--white) / var(--tw-text-opacity))
            }

            input[data-astro-cid-6wvssxk3]::-moz-placeholder {
                --tw-placeholder-opacity: 1;
                color: rgb(var(--grey-1) / var(--tw-placeholder-opacity))
            }

            input[data-astro-cid-6wvssxk3]::placeholder {
                --tw-placeholder-opacity: 1;
                color: rgb(var(--grey-1) / var(--tw-placeholder-opacity))
            }

            input[data-astro-cid-6wvssxk3]:focus {
                --tw-border-opacity: 1;
                border-color: rgb(59 130 246 / var(--tw-border-opacity));
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(59 130 246 / var(--tw-ring-opacity))
            }
        }

        label[data-astro-cid-6wvssxk3] {
            display: flex;
            width: 100%;
            flex-direction: column;
            text-align: center
        }

        label[data-astro-cid-6wvssxk3]:has(input[type=radio]:checked) {
            --tw-bg-opacity: 1;
            background-color: rgb(var(--blue) / var(--tw-bg-opacity))
        }
    </style>
    <script type="module" src="/_astro/hoisted.De2duPkC.js"></script>
    <!-- alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
<?php
    include '../panel/utils/authSurvey.php';
    $page_name = "Survey";
    include '../panel/vistas/web/headerViews.php';
        
?>
    <section class="container py-16 px-[5%]">
        <div class="relative py-16">
            <div class="absolute inset-x-0 flex justify-center -top-5">
                <div
                    class="w-auto aspect-square mix-blend-overlay bg-white rounded-full blur-2xl md:blur-3xl h-32 md:h-96">
                </div>
            </div>
            <div class="container text-center">
                <h2 class="font-bebas text-4xl  leading-none  text-[33px] md:text-[100px]  ">Cuestionario de Evaluación
                    del
                    Nivel de Habilidad en Sala de Pesas</h2> <span class="text-xl leading-none  md:text-[40px] ">Rellena
                    este cuestionario para poder personalizar con más eficiencia tus ejercicios y lecciones que
                    verás.</span>
            </div>
        </div>
        <form action="../panel/controladores/postSurvey.php" method="POST" class="flex flex-col gap-8 md:gap-12 leading-none md:px-[10%]">
            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Experiencia general
            </h4> <!-- select -->
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Cuánto tiempo llevas entrenando
                    regularmente en el gimnasio?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Menos de 6 meses</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Menos de 6 meses" type="radio" name="q1resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>6meses - 2años</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="6meses - 2años" type="radio" name="q1resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Más de 2 años</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Más de 2 años" type="radio" name="q1resp3"
                            data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Con qué frecuencia te entrenas en el
                    gimnasio cada semana?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>1-2 veces</span> <input maxlength="25"
                            class="invisible h-0 w-0" value="1-2 veces" type="radio" name="q2resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>6meses - 2años</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="6meses - 2años" type="radio" name="q2resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Más de 2 años</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="Más de 2 años" type="radio" name="q2resp3"
                            data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Cuál es tu nivel de confianza al
                    ejecutar correctamente los siguientes ejercicios? (Sentadilla con barra, Peso muerto, Press de banca
                    con barra, Press militar con barra)</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Nunca los he intentado / necesito
                            asistencia constante</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Nunca los he intentado / necesito asistencia constante" type="radio" name="q3resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Estoy familiarizado, pero necesito
                            supervisión ocasional</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Estoy familiarizado, pero necesito supervisión ocasional" type="radio" name="q3resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Estoy muy confiado y los realizo
                            regularmente sin supervisión</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Estoy muy confiado y los realizo regularmente sin supervisión" type="radio"
                            name="q3resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Has participado alguna vez en programas
                    de entrenamiento estructurados (ej. programas de fuerza, culturismo, powerlifting)?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, nunca</span> <input maxlength="25"
                            class="invisible h-0 w-0" value="No, nunca" type="radio" name="q4resp1"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, pero solo por periodos cortos</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="Sí, pero solo por periodos cortos"
                            type="radio" name="q4resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, por un periodo prolongado</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="Sí, por un periodo prolongado"
                            type="radio" name="q4resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Conocimiento de la Programación de Entrenamiento
            </h4>
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Eres capaz de crear y adaptar un
                    programa de entrenamiento basado en tus objetivos?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, me baso en programas preestablecidos
                            o en entrenadores</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="No, me baso en programas preestablecidos o en entrenadores" type="radio"
                            name="q5resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, pero con habilidades limitadas para
                            modificar y adaptar</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, pero con habilidades limitadas para modificar y adaptar" type="radio"
                            name="q5resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, con un excelente entendimiento de las
                            variables del entrenamiento (volumen, intensidad, frecuencia)</span> <input maxlength="25"
                            class="invisible h-0 w-0"
                            value="Sí, con un excelente entendimiento de las variables del entrenamiento (volumen, intensidad, frecuencia)"
                            type="radio" name="q5resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3> ¿Conoces los principios de
                    periodización y los aplicas en tus entrenamientos?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, no conozco estos conceptos</span>
                        <input maxlength="25" class="invisible h-0 w-0" value="No, no conozco estos conceptos"
                            type="radio" name="q6resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, tengo un conocimiento básico y los
                            aplico ocasionalmente</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, tengo un conocimiento básico y los aplico ocasionalmente" type="radio"
                            name="q6resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, tengo un conocimiento profundo y los
                            uso regularmente</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, tengo un conocimiento profundo y los uso regularmente" type="radio"
                            name="q6resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <h4 class="mt-16  text-[22px] md:text-[50px] text-center font-bebas">
                Conocimiento de Progresiones y Adaptación
            </h4>
            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Cómo monitoreas tus progresos en el
                    gimnasio?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No monitoreo los progresos</span> <input
                            maxlength="25" class="invisible h-0 w-0" value="No monitoreo los progresos" type="radio"
                            name="q7resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Ocasionalmente reviso el peso levantado o
                            el número de repeticiones</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Ocasionalmente reviso el peso levantado o el número de repeticiones" type="radio"
                            name="q7resp2" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Llevo un diario de entrenamiento
                            detallado y monitoreo constantemente los progresos</span> <input maxlength="25"
                            class="invisible h-0 w-0"
                            value="Llevo un diario de entrenamiento detallado y monitoreo constantemente los progresos"
                            type="radio" name="q7resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>

            <fieldset class="" data-astro-cid-6wvssxk3>
                <legend class="text-center md:text-3xl" data-astro-cid-6wvssxk3>¿Eres capaz de identificar y corregir
                    por ti mismo posibles errores en tu técnica de ejecución de los ejercicios?</legend>
                <div class="flex flex-col md:flex-row gap-2 md:gap-4 my-11" data-astro-cid-6wvssxk3> <label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>No, dependo completamente del feedback de
                            un entrenador</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="No, dependo completamente del feedback de un entrenador" type="radio"
                            name="q8resp1" data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, pero a veces necesito confirmación de
                            un experto</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, pero a veces necesito confirmación de un experto" type="radio" name="q8resp2"
                            data-astro-cid-6wvssxk3> </label><label
                        class="cursor-pointer py-5 md:py-10 w-full bg-gray-400 rounded-md hover:bg-gray-200"
                        data-astro-cid-6wvssxk3> <span data-astro-cid-6wvssxk3>Sí, soy consciente de mis errores y sé
                            cómo corregirlos</span> <input maxlength="25" class="invisible h-0 w-0"
                            value="Sí, soy consciente de mis errores y sé cómo corregirlos" type="radio"
                            name="q8resp3" data-astro-cid-6wvssxk3> </label> </div>
            </fieldset>
             <button type="submit" data-modal-target="static-modal" data-modal-toggle="static-modal"
                class="mt-8 bg-primary p-2.5 px-6 rounded-lg md:text-3xl text-nowrap mx-auto">
                Enviar formulario
            </button>
        </form>
    </section>
<?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php';
?>
</body>

</html>