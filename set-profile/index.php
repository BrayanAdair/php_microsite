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

<body class="bg-gray-800 text-white font-urb min-w-[100vw]">
<?php
    include '../panel/utils/auth.php';
    $page_name = "Set-Profile";
    include '../panel/vistas/web/header.php';
?>
    <div class="container px-[5%]">
        <div class="relative flex w-full justify-start gap-4 items-center my-8 font-bold"> <a href="/"
                class="flex gap-2 items-center text-base left-0"> <svg class="rotate-180"
                    xmlns="http://www.w3.org/2000/svg" width="11" height="19" viewBox="0 0 11 19" fill="none">
                    <path d="M1.4943 2L9.40845 9.91414L1.48101 17.8416" stroke="white" stroke-width="2.04849"
                        stroke-linecap="round"></path>
                </svg>
                Back
            </a> </div>
    </div>
    <section class="container pb-32 px-[5%] md:px-[20%] text-sm">
        <div class="flex flex-col bg-gray-400 mx-[5%] p-[5%] pt-[2%] md:mx-auto max-w-xl rounded-2xl">
            <div class="flex w-full justify-center">
                <div class="flex my-4"> <svg class="h-24 w-24" width="57" height="56" viewBox="0 0 57 56" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.71875" y="0.240631" width="55.5187" height="55.5187" rx="27.7594" fill="#D1D1D1">
                        </rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M36.8061 22.4481C36.8061 27.0474 33.0776 30.7759 28.4783 30.7759C23.8789 30.7759 20.1504 27.0474 20.1504 22.4481C20.1504 17.8488 23.8789 14.1203 28.4783 14.1203C33.0776 14.1203 36.8061 17.8488 36.8061 22.4481ZM34.0301 22.4481C34.0301 25.5143 31.5445 28 28.4783 28C25.412 28 22.9264 25.5143 22.9264 22.4481C22.9264 19.3819 25.412 16.8963 28.4783 16.8963C31.5445 16.8963 34.0301 19.3819 34.0301 22.4481Z"
                            fill="#0029FF"></path>
                        <path
                            d="M28.4783 34.9398C19.492 34.9398 11.8355 40.2536 8.91895 47.6981C9.62944 48.4036 10.3779 49.071 11.161 49.6968C13.3328 42.8619 20.1459 37.7158 28.4783 37.7158C36.8106 37.7158 43.6237 42.8619 45.7955 49.6968C46.5786 49.071 47.3271 48.4036 48.0376 47.6981C45.121 40.2536 37.4645 34.9398 28.4783 34.9398Z"
                            fill="#0029FF"></path>
                    </svg> </div>
            </div>
            <form action="." class="flex flex-col gap-3 w-full">
                <div class="w-full"> <label class="block mb-1 text-base text-white">
                        Nombre
                    </label>
                    <div class="flex gap-2"> <input maxlength="25" type="text" name="name"
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="nombre" required>
                        <div
                            class="text-sm rounded-lg block p-1 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500">
                            <svg class="scale-75" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 35 35" fill="none">
                                <path
                                    d="M19.6963 7.81765L27.7159 15.8373L8.99972 34.5535H0.980103V26.532L19.6963 7.81765ZM22.3695 5.14255L26.3793 1.13274C26.7339 0.778325 27.2146 0.579224 27.7159 0.579224C28.2172 0.579224 28.698 0.778325 29.0525 1.13274L34.4008 6.47916C34.5766 6.65473 34.7161 6.86324 34.8112 7.09274C34.9063 7.32225 34.9553 7.56826 34.9553 7.8167C34.9553 8.06515 34.9063 8.31116 34.8112 8.54066C34.7161 8.77017 34.5766 8.97867 34.4008 9.15425L30.3891 13.1641L22.3695 5.14255Z"
                                    fill="#202123"></path>
                            </svg> </div>
                    </div>
                </div>
                <div class="w-full"> <label class="block mb-1 text-base text-white">
                        Apellido
                    </label>
                    <div class="flex gap-2"> <input maxlength="25" type="text" name="last_name"
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="apellido" required>
                        <div
                            class="text-sm rounded-lg block p-1 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500">
                            <svg class="scale-75" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 35 35" fill="none">
                                <path
                                    d="M19.6963 7.81765L27.7159 15.8373L8.99972 34.5535H0.980103V26.532L19.6963 7.81765ZM22.3695 5.14255L26.3793 1.13274C26.7339 0.778325 27.2146 0.579224 27.7159 0.579224C28.2172 0.579224 28.698 0.778325 29.0525 1.13274L34.4008 6.47916C34.5766 6.65473 34.7161 6.86324 34.8112 7.09274C34.9063 7.32225 34.9553 7.56826 34.9553 7.8167C34.9553 8.06515 34.9063 8.31116 34.8112 8.54066C34.7161 8.77017 34.5766 8.97867 34.4008 9.15425L30.3891 13.1641L22.3695 5.14255Z"
                                    fill="#202123"></path>
                            </svg> </div>
                    </div>
                </div>
                <div class="w-full"> <label class="block mb-1 text-base text-white">
                        Correo
                    </label>
                    <div class="flex gap-2"> <input maxlength="25" type="email" name="email"
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="correo electronico" required>
                        <div
                            class="text-sm rounded-lg block p-1 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500">
                            <svg class="scale-75" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 35 35" fill="none">
                                <path
                                    d="M19.6963 7.81765L27.7159 15.8373L8.99972 34.5535H0.980103V26.532L19.6963 7.81765ZM22.3695 5.14255L26.3793 1.13274C26.7339 0.778325 27.2146 0.579224 27.7159 0.579224C28.2172 0.579224 28.698 0.778325 29.0525 1.13274L34.4008 6.47916C34.5766 6.65473 34.7161 6.86324 34.8112 7.09274C34.9063 7.32225 34.9553 7.56826 34.9553 7.8167C34.9553 8.06515 34.9063 8.31116 34.8112 8.54066C34.7161 8.77017 34.5766 8.97867 34.4008 9.15425L30.3891 13.1641L22.3695 5.14255Z"
                                    fill="#202123"></path>
                            </svg> </div>
                    </div>
                </div>
                <div class="w-full"> <label class="block mb-1 text-base text-white">
                        Contraseña
                    </label>
                    <div class="flex gap-2"> <input maxlength="25" type="password" name="password"
                            class="text-lg rounded-lg block w-full p-1 px-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="************" required>
                        <div
                            class="text-sm rounded-lg block p-1 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500">
                            <svg class="scale-75" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 35 35" fill="none">
                                <path
                                    d="M19.6963 7.81765L27.7159 15.8373L8.99972 34.5535H0.980103V26.532L19.6963 7.81765ZM22.3695 5.14255L26.3793 1.13274C26.7339 0.778325 27.2146 0.579224 27.7159 0.579224C28.2172 0.579224 28.698 0.778325 29.0525 1.13274L34.4008 6.47916C34.5766 6.65473 34.7161 6.86324 34.8112 7.09274C34.9063 7.32225 34.9553 7.56826 34.9553 7.8167C34.9553 8.06515 34.9063 8.31116 34.8112 8.54066C34.7161 8.77017 34.5766 8.97867 34.4008 9.15425L30.3891 13.1641L22.3695 5.14255Z"
                                    fill="#202123"></path>
                            </svg> </div>
                    </div>
                </div> <button formaction="/profile" type="submit" data-modal-target="static-modal"
                    class="bg-primary p-2.5 px-6 rounded-lg text-nowrap text-center mt-4">
                    Guardar cambios
                </button>
            </form>
        </div>
    </section>
<?php
    include 'panel/vistas/web/footer.php';
?>
</body>

</html>