<?php
$host = "localhost";
$user = "root";
$password = "";
$bd = "bd";

$conecta = mysqli_connect($host, $user, $password, $bd);

if ($conecta->connect_error) {
    die("Error de conexión: " . $conecta->connect_error);
}
