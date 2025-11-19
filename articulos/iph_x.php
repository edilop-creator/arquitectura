<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: iPhone X | " . date("Y"); ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'SF Pro Text', sans-serif;
            margin: 20px;
            background-color: #e9ebee;
            color: #1c1c1e;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #6a6a6f; /* Gris espacial de Apple */
            text-align: center;
            border-bottom: 3px solid #6a6a6f;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        .intro-text {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.1em;
        }
        .specs-list {
            list-style: none;
            padding: 0;
        }
        .specs-list li {
            background-color: #f7f7f7;
            margin-bottom: 12px;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ddd;
        }
        .specs-list strong {
            font-weight: bold;
            color: #333;
            width: 40%;
        }
        .specs-list span {
            text-align: right;
            width: 60%;
            font-size: 1.05em;
        }
        .feature-callout {
            margin-top: 30px;
            padding: 20px;
            background-color: #007aff; /* Azul de Apple */
            color: white;
            border-radius: 10px;
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
        // 1. Uso de PHP para definir constantes y variables
        $modelo = "iPhone X";
        $lanzamiento = 2017;
        $seguridad = "Face ID";
    ?>
    
    <h1>📱 Ficha Técnica: <?php echo $modelo; ?> (<?php echo $lanzamiento; ?>)</h1>
    
    <p class="intro-text">
        El **<?php echo $modelo; ?>** fue la edición de décimo aniversario de Apple, introduciendo el diseño de pantalla completa y la revolucionaria tecnología **<?php echo $seguridad; ?>**.
    </p>

    <?php
        // 2. Array PHP con las especificaciones clave
        $specs = [
            "Pantalla" => "5.8 pulgadas Super Retina OLED",
            "Resolución" => "1125 x 2436 píxeles",
            "Chipset" => "Apple A11 Bionic",
            "Memoria RAM" => "3 GB",
            "Almacenamiento" => "64 GB o 256 GB",
            "Cámara Principal Dual" => "12 MP (angular) + 12 MP (telefoto)",
            "Cámara Frontal" => "7 MP (TrueDepth)",
            "Seguridad Biómetrica" => $seguridad,
            "Batería" => "2716 mAh",
            "Materiales" => "Acero Inoxidable y Vidrio",
            "Carga Inalámbrica" => "Sí (Qi)"
        ];
    ?>

    <h2>Detalles Técnicos Principales</h2>
    
    <ul class="specs-list">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <li>
                <strong><?php echo $caracteristica; ?></strong>
                <span><?php echo $valor; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="feature-callout">
        <?php
            // 4. Nota PHP destacando la característica más importante
            echo "⭐ Primera vez con pantalla **OLED** sin biseles y desbloqueo por reconocimiento facial **" . $seguridad . "**. ¡Adiós, botón de inicio!";
        ?>
    </div>
</div>

<?php include_once('../componentes/footer.php')?>

</body>
</html>