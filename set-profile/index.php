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
    <link rel="stylesheet" href="/_astro/article.DzhJuGNJ.css">
    <link rel="stylesheet" href="/panel/assets/css/easy.css">
    <script type="module" src="/_astro/hoisted.De2duPkC.js"></script>
    <!-- CDN alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-800 text-white font-urb">
<?php
    include '../panel/utils/auth.php';
    $page_name = "Set-Profile";
    include '../panel/vistas/web/headerViews.php';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $nombre = isset($_SESSION['user_nombres']) ? $_SESSION['user_nombres'] : '';
    $apellidos = isset($_SESSION['user_apellidos']) ? $_SESSION['user_apellidos'] : '';
    $email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';
    //paa la foto de perfil
  
    include '../panel/utils/config.php';
    $id_usuario = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT foto FROM usuarios WHERE id_usuario = ?");
    $stmt->execute([$id_usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $foto = $user['foto'] ?? null; // Si no tiene foto, será null
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
            <form action="../panel/controladores/updatePerfil.php" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3 w-full">
                <div class="flex w-full justify-center">
                <label for="profile_image" class="cursor-pointer">
                        <?php if ($foto): ?>
                            <img src="data:image/jpeg;base64,<?= base64_encode($foto); ?>" alt="Foto de perfil" class="h-20 w-20 rounded-full profile-image">
                        <?php else: ?>
                            <!-- Mostrar imagen por defecto si no tiene una foto -->
                            <img src="/panel/assets/images/auth/perfil.png" alt="Foto por defecto" class="h-20 w-20 rounded-full profile-image">
                        <?php endif; ?>
                    </label>
             
                    <input type="file" id="profile_image" name="profile_image" accept="image/*" style="display:none;">
                    
                 </div>
                <div class="w-full"> <label class="block mb-1 text-base text-white">
                        Nombre
                    </label>
                    <div class="flex gap-2"> <input maxlength="25" type="text" name="name"
                            class="text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500"
                            value="<?= htmlspecialchars($nombre); ?>">
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
                            value="<?= htmlspecialchars($apellidos); ?>">
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
                            value="<?= htmlspecialchars($email); ?>">
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
                             >
                        <div
                            class="text-sm rounded-lg block p-1 bg-gray-600 border-transparent placeholder-gray-100 text-white focus:ring-blue-500 focus:border-blue-500">
                            <svg class="scale-75" xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                viewBox="0 0 35 35" fill="none">
                                <path
                                    d="M19.6963 7.81765L27.7159 15.8373L8.99972 34.5535H0.980103V26.532L19.6963 7.81765ZM22.3695 5.14255L26.3793 1.13274C26.7339 0.778325 27.2146 0.579224 27.7159 0.579224C28.2172 0.579224 28.698 0.778325 29.0525 1.13274L34.4008 6.47916C34.5766 6.65473 34.7161 6.86324 34.8112 7.09274C34.9063 7.32225 34.9553 7.56826 34.9553 7.8167C34.9553 8.06515 34.9063 8.31116 34.8112 8.54066C34.7161 8.77017 34.5766 8.97867 34.4008 9.15425L30.3891 13.1641L22.3695 5.14255Z"
                                    fill="#202123"></path>
                            </svg> </div>
                    </div>
                </div> <button type="submit" data-modal-target="static-modal"
                    class="bg-primary p-2.5 px-6 rounded-lg text-nowrap text-center mt-4">
                    Guardar cambios
                </button>
            </form>
        </div>
    </section>
    <?php
    include '../panel/vistas/web/footer.php';
    include '../panel/utils/alertas.php';
    ?>
</body>

</html>
