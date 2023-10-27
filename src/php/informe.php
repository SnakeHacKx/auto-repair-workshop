<?php
// Leer datos del archivo CSV
$autos = array_map('str_getcsv', file('../../assets/autos.csv'));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe de Mantenimientos</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <div class="container">
        <h2>Informe de Mantenimientos</h2>
        <table border="1">
            <tr>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Dueño</th>
                <th>Mantenimiento</th>
                <th>Fecha</th>
                <th>Cubículo</th>
            </tr>
            <?php
            foreach ($autos as $auto) {
                echo "<tr>";
                foreach ($auto as $dato) {
                    echo "<td>$dato</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <div class="btn-container">
        <a class="btn" href="../../index.php">Volver a la Página Principal</a>
        
            <a class="btn" href="borrar.php">Borrar Datos</a>
        </div>
    </div>
</body>
</html>
