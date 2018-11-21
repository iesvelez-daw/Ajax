<?php
header('Content-Type: application/json'); // Esta línea indica que la respuesta es JSON
header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
// Fecha caducada
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Esta línea ayuda a que la respuesta no se incluya en caché

$dwes = new mysqli('localhost', 'dwes', 'abc123', 'dwes');
if ($dwes->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$dwes->set_charset("utf8");
$resultado = $dwes->query('SELECT * FROM modulos WHERE id = ' . $_GET['id']);
if ($descripcion = $resultado->fetch_assoc()){
    echo json_encode($descripcion);
}

$dwes->close();
?>
