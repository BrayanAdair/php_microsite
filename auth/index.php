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
    <script type="module" src="/_astro/hoisted.Dv5-w0jH.js"></script>
    <!-- alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
<?php
    $page_name = "Auth";
    include '../panel/vistas/web/headerViews.php';
?>
    <div class="container px-[5%]">
        <div class="relative flex w-full justify-start gap-4 items-center my-8 font-bold"> <a href="/"
                class=" flex gap-2 items-center text-base left-0"> <svg class="rotate-180"
                    xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                    <path d="M1.4943 2L9.40845 9.91414L1.48101 17.8416" stroke="white" stroke-width="2.04849"
                        stroke-linecap="round"></path>
                </svg>
                Back
            </a> </div>
    </div>
    <section class="container  pb-32 px-[5%] md:px-[20%] text-sm">
        <div class="flex bg-gray-400 mx-[5%] p-[5%] md:mx-auto max-w-xl rounded-2xl">
            <div id="contentslider" class="flex overflow-hidden scroll-smooth items-center">
                <div id="login" class="flex h-full justify-center flex-col flex-shrink-0 w-full gap-6 px-2">
                    <div class="container text-center">
                        <h2 class="font-bebas text-4xl  leading-none ">Ingresa a tu cuenta</h2> <span
                            class="text-xl leading-none">y descubre el mundo del coaching</span>
                    </div>
                    <form id="loginForm" action="../panel/controladores/login.php" method="POST" class="flex flex-col gap-3">
                        <div> <label class="block mb-1 text-base text-white">
                                Correo
                            </label> <input maxlength="25" type="email" name="email"
                                class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                placeholder="correo electronico" required> </div>
                        <div> <label class="block mb-1 text-base text-white">
                                Contraseña
                            </label> <input maxlength="25" type="password" name="password"
                                class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                placeholder="******" required> </div> <button type="submit"
                            class="bg-primary p-2.5 px-6 rounded-lg md:text-3xl  text-nowrap text-center my-4">
                            ingresar
                        </button>
                    </form> <button id="goToRegister" class="flex mx-auto text-xl md:text-2xl">Aún no tengo
                        cuenta</button>
                </div>
                <div id="register" class="flex h-full justify-center flex-col flex-shrink-0 w-full gap-6 px-2">
                    <div class="container text-center">
                        <h2 class="font-bebas text-4xl  leading-none ">Crea tu cuenta</h2> <span
                            class="text-xl leading-none">y descubre el mundo del coaching</span>
                    </div>
                    <form action="../panel/controladores/crearCuenta.php" method="POST" class="flex flex-col gap-3">
                        <div class="flex flex-col md:flex-row gap-4 w-full">
                            <div class="w-full"> <label class="block mb-1 text-base text-white">
                                    Nombre
                                </label> <input maxlength="25" type="text" name="nombres"
                                    class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="nombre" required> </div>
                            <div class="w-full"> <label class="block mb-1 text-base text-white">
                                    Apellido
                                </label> <input maxlength="25" type="text" name="apellidos"
                                    class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="apellido" required> </div>
                        </div>
                        <div> <label class="block mb-1 text-base text-white">
                                Correo
                            </label> <input maxlength="25" type="email" name="email"
                                class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                placeholder="correo electronico" required> </div>
                        <div> <label class="block mb-1 text-base text-white">
                                Contraseña
                            </label> <input maxlength="25" type="password" name="password"
                                class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                                placeholder="******" required> </div> <!-- terms -->
                        <div class="flex gap-4"> <input maxlength="25" type="checkbox" required name="" id="">
                            <p>
                                Acepto las políticas de privacidad para toma de
                                datos personales detalladas en los
                                <a class="text-primary font-bold text-xs" href="/#">T&C</a>
                            </p>
                        </div> <!-- terms --> <button type="submit"
                            data-modal-target="static-modal"
                            class="bg-primary p-2.5 px-6 rounded-lg md:text-3xl text-nowrap  text-center">
                            Crear cuenta
                        </button>
                    </form> <button id="goToLogin" class="flex mx-auto text-xl md:text-2xl">Ya tengo cuenta</button>
                </div>
            </div>
        </div>
    </section>
<?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php'; 
?>
</body>

</html>