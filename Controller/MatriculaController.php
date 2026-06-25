<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CasoEstudio1/Model/MatriculaModel.php';

$mensajeAlerta = "";

if (isset($_POST["btnRegistrarMatricula"])) {
    $identificacion = $_POST["txtIdentificacion"];
    $monto = $_POST["numMonto"];
    $tipoCurso = $_POST["txtTipoCurso"];

    $respuesta = RegistrarMatriculaModel($identificacion, $monto, $tipoCurso);

    if ($respuesta === true) {
        header("Location: /CasoEstudio1/View/vInicio/ConsultaMatricula.php");
        exit();
    } else {
        $mensajeAlerta = $respuesta;
    }
}

$listaMatriculas = ConsultarMatriculasModel();
?>