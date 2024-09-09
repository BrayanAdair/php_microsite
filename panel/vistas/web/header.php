
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = isset($page_name) ? $page_name : "Inicio";
// Obtener la foto de perfil del usuario si está logueado
$foto_perfil = null;
if (isset($_SESSION['user_id'])) {
    include './panel/utils/config.php';
    $id_usuario = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT foto FROM usuarios WHERE id_usuario = ?");
    $stmt->execute([$id_usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $foto_perfil = $user['foto'] ?? null;
}
?>

<nav class="container z-20 relative mt-[29px] md:mt-[43px] flex justify-between px-[5%] md:gap-[87px] items-center">
    <a class="md:mr-auto flex-shrink-0" href="/"> 
        <img class="w-auto h-[1.9rem] md:h-[3.5rem]" src="/_astro/logo.Cg2ExKvT.png" alt="">
    </a>
    <div class="flex gap-2 md:gap-4 lg:gap-8">
    <a href="/profile"
               class="flex-shrink-0 py-2 px-1 md:px-3 cursor-pointer border border-transparent hover:border-primary active:border-primary rounded-md">
                <p>Entrenar</p>
            </a>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
           class="flex-shrink-0 py-2 px-1 md:px-3 cursor-pointer border border-transparent hover:border-primary active:border-primary rounded-md">
            <p><?php echo $current_page; ?></p>
        </a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="../panel/utils/logout.php"
               class="flex-shrink-0 py-2 px-1 md:px-3 cursor-pointer border border-transparent hover:border-primary active:border-primary rounded-md">
                <p>Cerrar sesión</p>
            </a>
            <a href="/set-profile" class="relative place-content-center">
                <?php if ($foto_perfil): ?>
                    <!-- Mostrar la foto del usuario si existe -->
                    <img src="data:image/jpeg;base64,<?= base64_encode($foto_perfil); ?>" alt="Foto de perfil" class="h-6 w-6 rounded-full">
                <?php else: ?>
                    <!-- Mostrar imagen por defecto si no tiene foto -->
                    <img src="./panel/assets/images/auth/perfil.png" alt="Foto por defecto" class="h-6 w-6 rounded-full">
                <?php endif; ?>
            </a>
        <?php else: ?>
            <a href="/auth"
               class="flex-shrink-0 py-2 px-1 md:px-3 cursor-pointer border border-transparent hover:border-primary active:border-primary rounded-md">
                <p>Iniciar sesión</p>
            </a>
        <?php endif; ?>
        <custom-lang class="relative place-content-center">
            <button class="w-max p-2 hover:bg-gray-100 rounded-full">
                <img class="w-[20px]" src="" alt="">
            </button>
        </custom-lang>
    </div>
</nav>
