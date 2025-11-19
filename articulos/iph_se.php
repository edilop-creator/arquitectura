<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: iPhone SE (3ra Gen) | " . date("Y"); ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 20px;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007aff; /* Azul de Apple */
            text-align: center;
            border-bottom: 2px solid #007aff;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }
        .spec-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }
        .spec-item {
            background-color: #f0f0f5;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #007aff;
        }
        .spec-item strong {
            display: block;
            font-size: 0.9em;
            color: #555;
            margin-bottom: 5px;
        }
        .spec-item span {
            font-size: 1.1em;
            font-weight: bold;
            color: #1a1a1a;
        }
        .intro-text {
            text-align: center;
            margin-bottom: 30px;
            font-style: italic;
        }
        .note {
            margin-top: 30px;
            padding: 15px;
            background-color: #ffcc00; /* Amarillo */
            color: #333;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Uso de PHP para definir constantes y variables
        $modelo = "iPhone SE (3ra Generación)";
        $chip = "A15 Bionic";
        $touch_id = "Touch ID";
    ?>
    
    <h1>🍎 Ficha Técnica: <?php echo $modelo; ?></h1>
    
    <p class="intro-text">
        El <?php echo $modelo; ?> mantiene el diseño clásico, pero incorpora el potente chip de los modelos insignia de su generación.
    </p>

    <?php
        // 2. Array PHP con las especificaciones clave
        $specs = [
            "Chipset" => $chip,
            "Pantalla" => "4.7 pulgadas Retina HD",
            "Cámara Principal" => "12 MP (con Deep Fusion)",
            "Cámara Frontal" => "7 MP",
            "Seguridad" => $touch_id . " (Botón de inicio)",
            "Conectividad" => "5G",
            "RAM" => "4 GB",
            "Almacenamiento" => "64 GB, 128 GB, 256 GB",
            "Protección" => "IP67 (Resistencia al agua y polvo)",
            "Sistema Operativo" => "iOS 15 (Inicial)",
            "Materiales" => "Aluminio de calidad aeroespacial",
            "Carga Rápida" => "20W (50% en 30 minutos)"
        ];
    ?>

    <h2>Especificaciones Clave</h2>
    
    <div class="spec-grid">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <div class="spec-item">
                <strong><?php echo $caracteristica; ?></strong>
                <span><?php echo $valor; ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="note">
        <?php
            // 4. Nota PHP destacando la característica principal
            $velocidad_chip = "extrema";
            echo "🔥 El gran atractivo de este modelo es su procesador **" . $chip . "**, que ofrece un rendimiento de velocidad " . $velocidad_chip . ".";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>