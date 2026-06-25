<?php

function ImportCSS()
{
    echo '
        <head>
        <meta charset="UTF-8" />
        <title>Caso de Estudio #1 - Panel Interno</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
        <style>
            body {
                background-color: #f8f9fa;
                margin: 0;
                padding: 0;
            }
            .navbar {
                z-index: 1030;
            }
            .sidebar {
                position: fixed;
                top: 56px;
                left: 0;
                bottom: 0;
                width: 260px;
                background-color: #212529;
                padding-top: 20px;
                z-index: 1020;
            }
            .sidebar .nav-link {
                color: rgba(255,255,255,0.85);
                margin: 5px 15px;
                border-radius: 6px;
                display: flex;
                align-items: center;
                gap: 10px;
                transition: background 0.2s;
            }
            .sidebar .nav-link:hover {
                background-color: rgba(255,255,255,0.1);
                color: #fff;
            }
            .sidebar .nav-link.active {
                background-color: #0d6efd !important;
                color: #fff !important;
                font-weight: 600;
            }
            .content-wrapper {
                margin-left: 260px;
                padding-top: 86px; /* Da espacio libre debajo del navbar */
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 40px;
            }
            .card-table {
                background: #ffffff;
                box-shadow: 0 4px 12px rgba(0,0,0,0.08);
                border: none;
                border-radius: 10px;
                overflow: hidden;
            }
        </style>
        </head>
    ';
}

function ImportJS()
{
    echo '
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    ';
}

function Navbar()
{
    echo '
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-3">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#"><i class="ti ti-school me-2 text-info"></i>Fidélitas - Sistema de Matrículas</a>
                <div class="ms-auto d-flex align-items-center">
                    <span class="text-light me-2 small">Estudiante</span>
                    <i class="ti ti-user-circle fs-3 text-white"></i>
                </div>
            </div>
        </nav>
    ';
}

function Sidebar()
{
    $currentUri = $_SERVER['REQUEST_URI'];
    $activeRegistro = (strpos($currentUri, 'RegistroMatricula.php') !== false) ? 'active' : '';
    $activeConsulta = (strpos($currentUri, 'ConsultaMatricula.php') !== false) ? 'active' : '';

    echo '
        <aside id="sidebar" class="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link py-2 px-3 ' . $activeRegistro . '" href="RegistroMatricula.php">
                        <i class="ti ti-edit fs-4"></i>
                        <span>Registrar Matrícula</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-3 ' . $activeConsulta . '" href="ConsultaMatricula.php">
                        <i class="ti ti-table fs-4"></i>
                        <span>Consultar Matrículas</span>
                    </a>
                </li>
            </ul>
        </aside>
    ';
}

function Footer()
{
    echo '
        <footer class="text-center py-4 mt-5 text-secondary border-top">
            <p class="mb-0">© ' . date("Y") . ' Universidad Fidélitas - Todos los derechos reservados.</p>
        </footer>
    ';
}
?>