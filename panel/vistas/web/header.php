
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current_page = isset($page_name) ? $page_name : "Inicio"; // Si $page_name está definida, úsala. Si no, usa "Inicio".
?>

<nav class="container z-20 relative mt-[29px] md:mt-[43px] flex justify-between px-[5%] md:gap-[87px] items-center">
    <a class="md:mr-auto flex-shrink-0" href="/"> 
        <img class="w-auto h-[1.9rem] md:h-[3.5rem]" src="/_astro/logo.Cg2ExKvT.png" alt="">
    </a>
    <div class="flex gap-2 md:gap-4 lg:gap-8">
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
                <svg class="h-6 w-6" width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.71875" y="0.240631" width="55.5187" height="55.5187" rx="27.7594" fill="#D1D1D1"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M36.8061 22.4481C36.8061 27.0474 33.0776 30.7759 28.4783 30.7759C23.8789 30.7759 20.1504 27.0474 20.1504 22.4481C20.1504 17.8488 23.8789 14.1203 28.4783 14.1203C33.0776 14.1203 36.8061 17.8488 36.8061 22.4481ZM34.0301 22.4481C34.0301 25.5143 31.5445 28 28.4783 28C25.412 28 22.9264 25.5143 22.9264 22.4481C22.9264 19.3819 25.412 16.8963 28.4783 16.8963C31.5445 16.8963 34.0301 19.3819 34.0301 22.4481Z"
                          fill="#0029FF"></path>
                    <path
                          d="M28.4783 34.9398C19.492 34.9398 11.8355 40.2536 8.91895 47.6981C9.62944 48.4036 10.3779 49.071 11.161 49.6968C13.3328 42.8619 20.1459 37.7158 28.4783 37.7158C36.8106 37.7158 43.6237 42.8619 45.7955 49.6968C46.5786 49.071 47.3271 48.4036 48.0376 47.6981C45.121 40.2536 37.4645 34.9398 28.4783 34.9398Z"
                          fill="#0029FF"></path>
                </svg>
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
