<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("../config/conecta.php");

    // Realizar la consulta para obtener los detalles del empleado con el ID proporcionado
    $sql = "SELECT * FROM tbl_estudiantes ORDER BY id DESC LIMIT 1";
    $resultado = $conecta->query($sql);

    // Verificar si la consulta se ejecutó correctamente
    if (!$resultado) {
        echo json_encode(["error" => "Error al obtener los detalles del estudiante: " . $conecta->error]);
        exit();
    }

    // Obtener los detalles del ultimo empleado registrado, como un array asociativo
    $estudiante = $resultado->fetch_assoc();

    // Devolver los detalles del empleado como un objeto JSON
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($estudiante);
    exit;
}
