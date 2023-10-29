<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner = $_POST["owner"];
    $plate = $_POST["plate"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $type = $_POST["type"];
    $cubicle = $_POST["cubicle"];
    $date = $_POST["date"];

    // Guardar datos en archivo CSV
    $csvData = "$owner,$plate,$brand,$model,$color,$type,$cubicle,$date\n";
    file_put_contents("../../data/autos.csv", $csvData, FILE_APPEND);

    // Redirigir de nuevo al formulario después de registrar
    // header("Location: ../../index.html");
    header("Location: ../pages/register.html");
    exit();
}
?>