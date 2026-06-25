<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CasoEstudio1/Controller/MatriculaController.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/CasoEstudio1/View/LayoutInterno.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php ImportCSS(); ?>

<body>

    <?php Navbar(); ?>
    <?php Sidebar(); ?>

    <div class="content-wrapper">
        <div class="container-fluid">
            
            <div class="card card-table mx-auto" style="max-width: 800px;">
                <div class="card-header bg-dark text-white py-3">
                    <h5 class="mb-0"><i class="ti ti-user-plus me-2"></i>Nueva Matrícula de Curso</h5>
                </div>
                <div class="card-body p-4">
                    
                    <?php if (!empty($mensajeAlerta)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="ti ti-alert-triangle-filled me-2"></i>
                            <?php echo htmlspecialchars($mensajeAlerta); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST" id="formRegistroMatricula" autocomplete="off">
                        
                        <div class="mb-4">
                            <label for="txtIdentificacion" class="form-label fw-semibold">Identificación del Estudiante</label>
                            <input type="text" class="form-control form-control-lg" id="txtIdentificacion" name="txtIdentificacion" placeholder="Ej: 102340567" required>
                        </div>

                        <div class="mb-4">
                            <label for="numMonto" class="form-label fw-semibold">Monto del Pago (₡)</label>
                            <input type="number" step="0.01" class="form-control form-control-lg" id="numMonto" name="numMonto" placeholder="Ej: 75000.00" required>
                        </div>

                        <div class="mb-4">
                            <label for="txtTipoCurso" class="form-label fw-semibold">ID del Tipo de Curso</label>
                            <input type="number" class="form-control form-control-lg" id="txtTipoCurso" name="txtTipoCurso" placeholder="Ingrese el ID numérico del curso (Ej: 1, 2, 3...)" required>
                            <div class="form-text text-muted mt-2">
                                Cursos disponibles por ID: 1 (Prog), 2 (Cocina), 3 (Religión), 4 (Manualidades), 5 (Mecánica).
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" id="btnRegistrarMatricula" name="btnRegistrarMatricula" class="btn btn-primary btn-lg px-5 fw-bold">
                                <i class="ti ti-device-floppy me-2"></i>Procesar Matrícula
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <?php Footer(); ?>

        </div>
    </div>

    <?php ImportJS(); ?>
</body>

</html>