<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../config/conecta.php");
    $tbl_estudiantes = "tbl_estudiantes";


    $nombre = trim($_POST['nombre']);
    $cedula = trim($_POST['cedula']);
    $edad = trim($_POST['edad']);
    $sexo = trim($_POST['sexo']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $ano = trim($_POST['ano']);
    $seccion = trim($_POST['seccion']);
    $fecha_registro = trim($_POST['fecha_registro']);
    $nombre_representante = trim($_POST['nombre_representante']);

    $dirLocal = "fotos_estudiante";

    if (isset($_FILES['avatar'])) {
        $archivoTemporal = $_FILES['avatar']['tmp_name'];
        $nombreArchivo = $_FILES['avatar']['name'];

        $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

        // Generar un nombre único y seguro para el archivo
        $nombreArchivo = substr(md5(uniqid(rand())), 0, 10) . "." . $extension;
        $rutaDestino = $dirLocal . '/' . $nombreArchivo;

        // Mover el archivo a la ubicación deseada
        if (move_uploaded_file($archivoTemporal, $rutaDestino)) {

            $sql = "INSERT INTO $tbl_estudiantes (nombre, cedula, edad, sexo, direccion, telefono, ano, seccion, fecha_registro, nombre_representante, avatar) 
            VALUES ('$nombre', '$cedula', '$edad', '$sexo', '$direccion' , '$telefono', '$ano', '$seccion', '$fecha_registro', '$nombre_representante', '$nombreArchivo')";

            if ($conecta->query($sql) === TRUE) {
                header("location:../");
            } else {
                echo "Error al crear el registro: " . $conecta->error;
            }
        } else {
            echo json_encode(array('error' => 'Error al mover el archivo'));
        }
    } else {
        echo json_encode(array('error' => 'No se ha enviado ningún archivo o ha ocurrido un error al cargar el archivo'));
    }
}

/**
 * Función para obtener todos los empleados 
 */

function obtenerEstudiantes($conecta)
{
    $sql = "SELECT * FROM tbl_estudiantes ORDER BY id ASC";
    $resultado = $conecta->query($sql);
    if (!$resultado) {
        return false;
    }
    return $resultado;
}
