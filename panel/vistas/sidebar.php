<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'dashboard';
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.php?view=dashboard"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.php?view=dashboard"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Brayan Adair</h5>
                        <span>Administrador</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-cog text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Configuracion de cuenta</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Cambiar Contraseña</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Agregar a la lista</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Ménus</span>
        </li>
        <li class="nav-item menu-items <?php echo $view == 'dashboard' ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?view=dashboard">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items <?php echo $view == 'ejercicios' ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?view=ejercicios">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Ejercicios</span>
            </a>
        </li>
        <li class="nav-item menu-items <?php echo $view == 'overlay' ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?view=overlay" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Overlay</span>
            </a>
        </li>
        <li class="nav-item menu-items active">
            <a class="nav-link" href="/profile" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">Entrenamiento</span>
            </a>
        </li>
    </ul>
</nav>
