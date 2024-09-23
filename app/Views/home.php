<?php include __DIR__ . '/layout/header.php'; ?>


<div class="bg-dark w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="fs-1 text-center">
        <p><span class="cinzel text-white">Aquilles</span></p>
        <p class="fs-6 text-white">Micro-Framework para PHP</p>
        <p class="fs-6 text-white">El propósito de este proyecto es facilitar a los desarrolladores el inicio de proyectos basados en el patrón MVC.</p>
        <p class="fs-2 fw-bold text-light mt-5 mb-5 text-sm">Versión: <?php echo $_ENV['APP_VERSION']; ?></p>
        <p class="text-light fs-6 mt-5">PHP <?php echo phpversion(); ?> | Motor de base de datos <?php echo $_ENV['APP_DB_MOTOR']; ?></p>
    </div>
</div>


<?php include __DIR__ . '/layout/footer.php'; ?>