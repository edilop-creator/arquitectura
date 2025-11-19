<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: Samsung Galaxy Note 20 Ultra"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'SamsungSharpSans', sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
            color: #1c1c1e;
        }
        .container {
            max-width: 750px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0070c0; /* Azul Galaxy */
            text-align: center;
            border-bottom: 4px solid #0070c0;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        h2 {
            color: #333;
            margin-top: 25px;
        }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .spec-table th, .spec-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }
        .spec-table th {
            background-color: #e6f3ff; /* Fondo claro para las características */
            color: #0056b3;
            width: 40%;
            font-weight: bold;
        }
        .spec-table tr:hover {
            background-color: #f0f8ff;
        }
        .feature-box {
            margin-top: 30px;
            padding: 20px;
            background-color: #1c1c1e;
            color: #fceb00; /* Amarillo/Dorado para destacar */
            border-radius: 10px;
            text-align: center;
            font-size: 1.1em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Uso de PHP para definir variables clave del modelo
        $modelo = "Samsung Galaxy Note 20 Ultra";
        $lanzamiento = 2020;
        $s_pen = "S Pen";
    ?>
    
    <h1>🖋️ Ficha Técnica: <?php echo $modelo; ?> (<?php echo $lanzamiento; ?>)</h1>
    
    <p style="text-align: center; font-style: italic;">
        El último de la línea Note, conocido por su excelencia en productividad y rendimiento.
    </p>

    <?php
        // 2. Array PHP con las especificaciones clave
        $specs = [
            "Pantalla" => "6.9 pulgadas Dynamic AMOLED 2X (120Hz adaptativos)",
            "Chipset (Región LATAM)" => "Exynos 990",
            "Chipset (Región USA/China)" => "Snapdragon 865+",
            "Memoria RAM" => "12 GB LPDDR5",
            "Almacenamiento" => "128 GB, 256 GB, 512 GB (Expandible)",
            "Cámara Principal" => "Triple: 108 MP + 12 MP (Ultra gran angular) + 12 MP (Periscopio 5x óptico)",
            "Cámara Frontal" => "10 MP",
            "Batería" => "4500 mAh",
            "Sistema Operativo (Inicial)" => "Android 10 (One UI 2.5)",
            "Característica Única" => $s_pen . " con latencia ultrabaja (9ms)"
        ];
    ?>

    <h2>Especificaciones Detalladas</h2>
    
    <table class="spec-table">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <tr>
                <th><?php echo $caracteristica; ?></th>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="feature-box">
        <?php
            // 4. Nota PHP destacando la característica principal de la serie Note
            $velocidad_pantalla = "120Hz";
            echo "El **" . $s_pen . "** y la pantalla de **" . $velocidad_pantalla . "** son el corazón de este dispositivo, diseñado para profesionales.";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>