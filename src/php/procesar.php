<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST["placa"];
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $color = $_POST["color"];
    $dueño = $_POST["dueño"];
    $mantenimiento = $_POST["mantenimiento"];
    $fecha = $_POST["fecha"];
    $cubiculo = $_POST["cubiculo"];

    // Guardar datos en archivo CSV
    $csvData = "$placa,$modelo,$marca,$color,$dueño,$mantenimiento,$fecha,$cubiculo\n";
    file_put_contents("../../data/autos.csv", $csvData, FILE_APPEND);

    // Redirigir de nuevo al formulario después de registrar
    header("Location: index.html");
    exit();
}
?>
