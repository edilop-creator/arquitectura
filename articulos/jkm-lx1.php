<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: Huawei Y9 (2019) JKM-LX1"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #e6e6fa; /* Lavanda suave */
            color: #333;
        }
        .container {
            max-width: 850px;
            margin: 0 auto;
            background-color: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        h1 {
            color: #6a5acd; /* Púrpura oscuro */
            border-bottom: 3px solid #6a5acd;
            padding-bottom: 12px;
            margin-bottom: 25px;
            text-align: center;
        }
        h2 {
            color: #8a2be2; /* Azul violeta */
            margin-top: 30px;
        }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .spec-table th, .spec-table td {
            padding: 15px;
            border: 1px solid #e0e0e0;
            text-align: left;
        }
        .spec-table th {
            background-color: #f0f8ff; /* Azul claro */
            width: 40%;
            font-weight: bold;
        }
        .spec-table tr:nth-child(even) {
            background-color: #fafafa;
        }
        .footer-note {
            margin-top: 30px;
            padding: 15px;
            background-color: #ffe0b2; /* Naranja muy suave */
            border-left: 5px solid #ff9800; /* Naranja */
            color: #5d4037;
            border-radius: 5px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Definición de variables clave con PHP
        $modelo_tecnico = "JKM-LX1";
        $nombre_comercial = "Huawei Y9 (2019)";
    ?>
    
    <h1><?php echo "Ficha Técnica Detallada: " . $nombre_comercial; ?></h1>
    <h2>Identificador de Modelo: <?php echo $modelo_tecnico; ?></h2>

    <?php
        // 2. Array PHP con las especificaciones técnicas principales
        $specs = [
            "Lanzamiento" => "Octubre 2018",
            "Pantalla" => "6.5 pulgadas IPS LCD con 'Notch' (2340 x 1080)",
            "Procesador (Chipset)" => "HiSilicon Kirin 710",
            "RAM" => "4 GB o 6 GB",
            "Almacenamiento" => "64 GB o 128 GB (Ampliable vía MicroSD)",
            "Cámara Trasera Dual" => "13 MP (Principal) + 2 MP (Profundidad)",
            "Cámara Frontal Dual" => "16 MP (Principal) + 2 MP (Profundidad)",
            "Batería" => "4000 mAh",
            "Sistema Operativo" => "Android 8.1 Oreo (EMUI 8.2)",
            "Lector de Huellas" => "Trasero"
        ];
    ?>

    <h2>Especificaciones Clave del Dispositivo</h2>
    
    <table class="spec-table">
        <?php 
        $i = 1;
        foreach ($specs as $caracteristica => $valor) : 
        ?>
            <tr>
                <th><?php echo $caracteristica; ?></th>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php 
            $i++;
            endforeach; 
        ?>
    </table>

    <div class="footer-note">
        <?php
            // 4. Uso de PHP para mostrar la fecha de generación del documento
            $timestamp = time();
            echo "<em>Esta ficha se generó dinámicamente el " . date("d/m/Y", $timestamp) . " a las " . date("H:i:s", $timestamp) . ". El modelo JKM-LX1 se distingue por su configuración de <strong>cuatro cámaras</strong> (dos frontales y dos traseras).</em>";
        ?>
    </div>
</div>

<?php include_once('../componentes/footer.php')?>

</body>
</html>