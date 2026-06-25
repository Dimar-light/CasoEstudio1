<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CasoEstudio1/View/LayoutExterno.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php ImportCSS(); ?>

<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-lg text-center p-5" style="max-width: 600px; border-radius: 15px;">
        <div class="card-body">
            <div class="mb-4">
                <i class="ti ti-school text-primary" style="font-size: 4rem;"></i>
            </div>
            <h1 class="fw-bold text-dark mb-3">¡Bienvenido(a) al Sistema de Matrículas!</h1>
            <p class="text-muted fs-5 mb-4">
                Caso de Estudio #1 del curso Ambiente Web Cliente Servidor. Aquí puedes gestionar el registro de estudiantes y la consulta de cursos matriculados.
            </p>
            
            <div class="d-grid gap-2">
                <a href="/CasoEstudio1/View/vInicio/RegistroMatricula.php" class="btn btn-primary btn-lg fw-semibold">
                    <i class="ti ti-login me-2"></i>Ingresar al Sistema
                </a>
            </div>
        </div>
    </div>

    <?php ImportJS(); ?>
</body>

</html>