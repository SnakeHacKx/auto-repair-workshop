<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plate = $_POST["plate"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $owner = $_POST["owner"];
    $type = $_POST["type"];
    $cubicle = $_POST["cubicle"];
    $date = $_POST["date"];
    $status = $_POST["status"];


    // Guardar datos en archivo CSV
    $csvData = "$owner,$plate,$brand,$model,$color,$type,$cubicle,$date,$status\n";
    file_put_contents("../../data/autos.csv", $csvData, FILE_APPEND);

    // Redirigir de nuevo al formulario después de registrar
    header("Location: ../pages/register.html");
    exit();
}
?>