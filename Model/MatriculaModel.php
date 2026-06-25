<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CasoEstudio1/Model/UtilitarioModel.php';

function RegistrarMatriculaModel($identificacion, $monto, $tipoCurso)
{
    try {
        $conn = OpenDB();
        $stmt = $conn->prepare("CALL spRegistrarMatricula(?, ?, ?)");
        $stmt->bind_param("sdi", $identificacion, $monto, $tipoCurso);
        
        $result = $stmt->execute();
        $stmt->close();
        CloseDB($conn);
        return $result;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function ConsultarMatriculasModel()
{
    try {
        $conn = OpenDB();
        $sql = "CALL spConsultarMatriculas()";
        $response = $conn->query($sql);

        $datos = array();
        if ($response) {
            while ($fila = $response->fetch_assoc()) {
                $datos[] = $fila;
            }
        }
        CloseDB($conn);
        return $datos;
    } catch (Exception $e) {
        return array();
    }
}
?>