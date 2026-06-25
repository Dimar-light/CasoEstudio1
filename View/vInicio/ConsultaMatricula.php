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
            
            <div class="card card-table mx-auto">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0"><i class="ti ti-list-details me-2"></i>Matrículas Registradas en el Sistema</h5>
                    <span class="badge bg-light text-dark fw-bold"><?php echo count($listaMatriculas); ?> Registros</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="ps-4">Consecutivo</th>
                                    <th>Identificación</th>
                                    <th>Fecha y Hora</th>
                                    <th>Curso Matriculado</th>
                                    <th class="pe-4 text-end">Monto Pagado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($listaMatriculas)): ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">
                                            <i class="ti ti-folder-off fs-2 d-block mb-2"></i>
                                            No se encontraron registros de matrículas en el sistema.
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($listaMatriculas as $reg): ?>
                                        <tr>
                                            <td class="ps-4 fw-semibold"><?php echo $reg['Consecutivo']; ?></td>
                                            <td><?php echo htmlspecialchars($reg['Identificacion']); ?></td>
                                            <td><?php echo date("d/m/Y g:i A", strtotime($reg['Fecha'])); ?></td>
                                            <td>
                                                <span class="badge bg-info text-dark px-2 py-1 fs-6 fw-medium">
                                                    <?php echo htmlspecialchars($reg['DescripcionTipoCurso']); ?>
                                                </span>
                                            </td>
                                            <td class="pe-4 text-end fw-bold text-success">₡<?php echo number_format($reg['Monto'], 2); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php Footer(); ?>

        </div>
    </div>

    <?php ImportJS(); ?>
</body>

</html>