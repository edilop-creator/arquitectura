<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: Samsung M3510 Beat Edition"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 20px;
            background-color: #f0f0f5;
            color: #333;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff5722; /* Naranja/Rojo vibrante, típico de un teléfono musical */
            text-align: center;
            border-bottom: 3px solid #ff5722;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .intro-text {
            text-align: center;
            margin-bottom: 25px;
            font-style: italic;
            font-size: 1.1em;
        }
        .specs-list {
            list-style: none;
            padding: 0;
        }
        .specs-list li {
            background-color: #ffe0b2; /* Naranja muy claro */
            margin-bottom: 10px;
            padding: 12px 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            font-size: 1em;
        }
        .specs-list strong {
            color: #bf360c; /* Naranja oscuro */
            width: 45%;
        }
        .specs-list span {
            text-align: right;
            width: 50%;
        }
        .music-feature {
            margin-top: 30px;
            padding: 20px;
            background-color: #333;
            color: #fff;
            border-radius: 8px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Uso de PHP para definir variables del modelo
        $modelo_comercial = "Samsung M3510 Beat Edition";
        $modelo_tecnico = "M3510";
        $lanzamiento = 2008;
    ?>
    
    <h1>🎵 Ficha Técnica: <?php echo $modelo_comercial; ?></h1>
    
    <p class="intro-text">
        El **<?php echo $modelo_comercial; ?>** (modelo **<?php echo $modelo_tecnico; ?>**, lanzado en **<?php echo $lanzamiento; ?>**) fue un teléfono centrado en la música, destacado por sus controles dedicados.
    </p>

    <?php
        // 2. Array PHP con las especificaciones clave
        $specs = [
            "Factor de Forma" => "Barra (Candybar)",
            "Pantalla" => "2.0 pulgadas TFT (176 x 220 píxeles)",
            "Memoria Interna" => "30 MB",
            "Memoria Externa" => "MicroSD (hasta 8 GB)",
            "Cámara" => "2 MP",
            "Conectividad" => "2G (GSM / EDGE)",
            "Funciones Musicales" => "Radio FM con RDS, Bluetooth A2DP",
            "Batería" => "800 mAh",
        ];
    ?>

    <h2>Especificaciones Principales</h2>
    
    <ul class="specs-list">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <li>
                <strong><?php echo $caracteristica; ?></strong>
                <span><?php echo $valor; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="music-feature">
        <?php
            // 4. Nota PHP destacando su función musical
            echo "🎧 Este teléfono contaba con **controles táctiles dedicados** en el lateral para la reproducción de música. ¡Un MP3 en tu bolsillo!";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>