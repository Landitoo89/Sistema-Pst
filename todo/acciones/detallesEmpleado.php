<?php
require_once("../config/conecta.php");
$id = $_GET['id'];

// Consultar la base de datos para obtener los detalles del empleado
$sql = "SELECT * FROM tbl_estudiantes WHERE id = $id LIMIT 1";
$query = $conecta->query($sql);
$estudiante = $query->fetch_assoc();

// Devolver los detalles del empleado como un objeto JSON
header('Content-type: application/json; charset=utf-8');
echo json_encode($estudiante);
exit;
