<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: iPhone 17 Pro Max (Modelo Hipotético)"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'SF Pro Display', sans-serif;
            margin: 20px;
            background-color: #000000; /* Fondo Oscuro */
            color: #ffffff; /* Texto Claro */
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #1c1c1e; /* Color similar al "Space Black" */
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border: 1px solid #333;
        }
        h1 {
            color: #4CAF50; /* Verde brillante (color Apple) */
            text-align: center;
            border-bottom: 3px solid #4CAF50;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        h2 {
            color: #f0f0f0;
            margin-top: 25px;
        }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .spec-table th, .spec-table td {
            padding: 15px;
            border-bottom: 1px solid #333;
            text-align: left;
        }
        .spec-table th {
            background-color: #2c2c2e;
            width: 35%;
            font-weight: bold;
        }
        .spec-table tr:hover {
            background-color: #3a3a3c;
        }
        .note {
            margin-top: 40px;
            padding: 20px;
            background-color: #333;
            border-left: 5px solid #ffcc00; /* Dorado/Amarillo */
            color: #ffffff;
            border-radius: 8px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Uso de PHP para definir el modelo
        $modelo = "iPhone 17 Pro Max";
        $chip = "A19 Bionic";
    ?>
    
    <h1>✨ Especificaciones Proyectadas: <?php echo $modelo; ?> ✨</h1>

    <p style="text-align: center; font-style: italic; color: #aaa;">
        Este modelo es **hipotético** y se basa en las tendencias de evolución de Apple.
    </p>

    <?php
        // 2. Array PHP con las especificaciones futuristas
        $specs = [
            "Fecha de Lanzamiento" => "Septiembre de 2025 (Estimada)",
            "Pantalla" => "6.9 pulgadas ProMotion (1-120Hz), MicroLED con True Tone",
            "Chipset" => $chip . " (Proceso de 2nm)",
            "Memoria RAM" => "12 GB LPDDR6",
            "Almacenamiento Base" => "256 GB hasta 4 TB",
            "Cámara Principal" => "Triple 50 MP (Sensor principal 1 pulgada) + 18 MP Ultra Gran Angular + 3x, 5x, 10x óptico",
            "Cámara Frontal" => "24 MP con enfoque automático (integrada bajo la pantalla)",
            "Batería" => "5500 mAh (Tecnología de electrolito sólido)",
            "Puerto" => "USB-C (Thunderbolt 5, 80 Gbps)",
            "Materiales" => "Titanio de Grado 6 (más ligero y resistente)",
            "Conectividad" => "Wi-Fi 7 y 6G"
        ];
    ?>

    <h2>Características Clave</h2>
    
    <table class="spec-table">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <tr>
                <th><?php echo $caracteristica; ?></th>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="note">
        <?php
            // 4. Nota PHP con información del sistema
            echo "El cambio más significativo sería la adopción de una pantalla **MicroLED** para mayor eficiencia y la integración del sensor de huellas bajo la pantalla. El chip **" . $chip . "** potenciaría estas funcionalidades.";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>