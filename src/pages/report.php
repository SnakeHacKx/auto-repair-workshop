<?php
// Leer datos del archivo CSV
$cars = array_map('str_getcsv', file('../../data/autos.csv'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Informe</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,400;9..40,600;9..40,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="/build/css/app.css" />
</head>

<body class="report">
  <div class="bg-image"></div>
  <header class="header header-home">
    <div class="header-centent container">
      <div class="bar">
        <nav class="main-nav">
          <a href="../../index.html">INICIO</a>
          <a href="#">SERVICIOS</a>
          <a href="#">NOSOTROS</a>
          <a href="#">CONTACTO</a>
        </nav>
        <div class="logo-mini">
          <h3>
            <span class="auto">AUTO</span><br /><span class="masters">MASTERS</span>
          </h3>
        </div>
      </div>
  </header>

  <main class="container main-container">
    <div class="table-container">
      <div class="report-header">
        <h2>Informe de Mantenimiento</h2>
        <div class="report-header-buttons">
          <button class="icon-button delete-button" onclick="confirmDelete()">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" style="fill: white">
              <path d="M296 64h-80a7.91 7.91 0 00-8 8v24h96V72a7.91 7.91 0 00-8-8z" fill="none" />
              <path
                d="M432 96h-96V72a40 40 0 00-40-40h-80a40 40 0 00-40 40v24H80a16 16 0 000 32h17l19 304.92c1.42 26.85 22 47.08 48 47.08h184c26.13 0 46.3-19.78 48-47l19-305h17a16 16 0 000-32zM192.57 416H192a16 16 0 01-16-15.43l-8-224a16 16 0 1132-1.14l8 224A16 16 0 01192.57 416zM272 400a16 16 0 01-32 0V176a16 16 0 0132 0zm32-304h-96V72a7.91 7.91 0 018-8h80a7.91 7.91 0 018 8zm32 304.57A16 16 0 01320 416h-.58A16 16 0 01304 399.43l8-224a16 16 0 1132 1.14z" />
            </svg>
            Eliminar Registros
          </button>
          <button class="icon-button" onclick="navigateTo('register.html')">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
              style="width: 16px; height: 16px; fill: black">
              <path
                d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm80 224h-64v64a16 16 0 01-32 0v-64h-64a16 16 0 010-32h64v-64a16 16 0 0132 0v64h64a16 16 0 010 32z" />
            </svg>
            Registrar Auto
          </button>
        </div>
      </div>
    </div>

    <table>
      <thead>
        <tr>
          <th>Placa</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Color</th>
          <th>Dueño</th>
          <th>Tipo</th>
          <th>Cubículo</th>
          <th>Fecha</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
      <?php
      $statusMap = [
        'completed' => 'Completado',
        'pending' => 'Pendiente',
        'cancelled' => 'Cancelado',
      ];

      $typeMap = [
        '1' => 'Cambio de aceite del motor',
        '2' => 'Inspección y reparación de frenos',
        '3' => 'Cambio de filtros de aceite y aire',
      ];

      $cubicleMap = [
        '1' => 'Cubículo #1',
        '2' => 'Cubículo #2',
        '3' => 'Cubículo #3',
      ];

      $colorMap = [
        'white' => 'Blanco',
        'black' => 'Negro',
        'gray' => 'Gris',
        'red' => 'Rojo',
        'blue' => 'Azul',
        'lightBlue' => 'Celeste',
        'green' => 'Verde',
        'orange' => 'Naranja',
        'brown' => 'Marrón',
        'yellow' => 'Amarillo',
        'silver' => 'Plateado',
        'purple' => 'Morado',
        'pink' => 'Rosado',
      ];


      foreach ($cars as $car) {
        echo '<tr>';
        foreach ($car as $key => $data) {
          if ($key === 0) { // Verifica si es la primera columna (placa)
            echo '<td class="plate">' . $data . '</td>';
          } elseif ($key === 3) {
            $color = $colorMap[$data];
            echo '<td>' . $color . '</td>';
          } elseif ($key === 5) {
            $type = $typeMap[$data];
            echo '<td>' . $type . '</td>';
          } elseif ($key === 6) {
            $cubicle = $cubicleMap[$data];
            echo '<td>' . $cubicle . '</td>';
          } elseif ($key === 8) {
            $status = $statusMap[$data];
            echo '<td><p class="status status-' . $data . '">' . ucfirst($status) . '</p></td>';
          } else {
            echo '<td>' . $data . '</td>';
          }
        }
        echo '</tr>';
      }

      // foreach ($autos as $auto) {
      //   echo '<tr>';
      //   foreach ($auto as $dato) {
      //     if ($dato === 'pending') {
      //       echo '<td><p class="status status-pending">' . $dato . '</p></td>';
      //     } elseif ($dato === 'completed') {
      //       echo '<td><p class="status status-completed">' . $dato . '</p></td>';
      //     } elseif ($dato === 'cancelled') {
      //       echo '<td><p class="status status-cancelled">' . $dato . '</p></td>';
      //     } else {
      //       echo '<td>' . $dato . '</td>';
      //     }
      //   }
      //   echo '</tr>';
      // }
      ?>
    </table>
  </main>

  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-box copyright">
        <p>
          Copyright © 2023, AutoMasters Inc. Todos los derechos reservados.
        </p>
      </div>

      <div class="footer-box social-media">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
            style="width: 24px; height: 24px; fill: white">
            <path
              d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z" />
          </svg>
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
            style="width: 24px; height: 24px; fill: white">
            <path
              d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
              fill-rule="evenodd" />
          </svg>
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
            style="width: 24px; height: 24px; fill: white">
            <path
              d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z" />
            />
            <path
              d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z" />
          </svg>
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
            style="width: 24px; height: 24px; fill: white">
            <path
              d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z" />
          </svg>
        </a>
      </div>

      <div class="footer-box terms">
        <a href="#">Términos de servicio</a> | <a href="#">Privacidad</a>
      </div>
    </div>
  </footer>
  <script src="../js/navigation.js"></script>
  <script src="../js/confirm-delete-db.js"></script>
</body>

</html>

<!-- Quiero que me proporciones unos 20 registros de un csv parecido a este: Omar Medina,RIGKRNGJ,Mitsubishi,Lancer EVO
9,green,2,2,2023-10-25,pending. Contexto: es una app web para registrar mantenimiento de autos. Esto para una base de
datos de prueba y no quiero estar creando mas registros manualmente... Explicacion de los campos: Nombre: nombre de
dueno del carro, Placa: Placa del auto valida en Panama, Marca: marca del auto, Modelo: modelo del auto, color: color
del auto pueden ser [white
black
gray
red
blue
lightBlue
green
orange
brown
yellow
silver
purple
pink], Tipo: puede ser [1,2,3], Cubiculo: puede ser [1,2,3], fecha: fecha de realizacion del mantenimiento y por ultimo
el estado, puede ser[pendingm cancelled, completed] -->