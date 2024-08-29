# Cotejamiento MySql
utf8mb4_0900_ai_ci ----- utf8mb4_general_ci

# Home
Todos lo pueden ver sin estar logueados

# Login
modificar el action y method de login y register

# Pricing
No necesita estar logueado

# Payment
Modificar el auth.php
Si deberia de necesitar estar logueado

# survey
Modificar el authSurvey.php
La logica es que si no tiene un status de PAGADO no puede entrar a survey

# Article
Logica es que debe de estar logueado, activo = 1, status = A y plan = silver

# Article2
Logica es que debe de estar logueado, activo = 1, status = A y plan = gold

# Header y Footer
Los headers y footers de la web fuera de PANEL son dinamicos solo mandarlos a llamar
  include '../panel/vistas/web/header.php';
  include '../panel/vistas/web/footer.php';

# Alertas
agregar el cdn <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
posterior mandarla a llamar debajo del footer  CON:  include '../panel/utils/alertas.php';

# Composer
composer init
composer require guzzlehttp/guzzle
