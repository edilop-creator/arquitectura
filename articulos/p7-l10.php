<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: Huawei Ascend P7 (P7-L10)"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 20px;
            background-color: #f7f7f7;
            color: #444;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        h1 {
            color: #008080; /* Teal/Verde azulado */
            border-bottom: 2px solid #008080;
            padding-bottom: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        .spec-list {
            list-style: none;
            padding: 0;
        }
        .spec-list li {
            background-color: #e0f2f2;
            margin-bottom: 10px;
            padding: 15px;
            border-left: 5px solid #008080;
            border-radius: 5px;
            font-size: 1.05em;
        }
        .spec-list strong {
            display: inline-block;
            width: 150px;
            color: #333;
        }
        .intro-text {
            margin-bottom: 25px;
            line-height: 1.6;
            text-align: justify;
        }
        .note-footer {
            margin-top: 30px;
            padding: 15px;
            background-color: #fffacd; /* Amarillo pálido */
            border: 1px solid #e9dfa3;
            color: #555;
            border-radius: 5px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <?php
        // 1. Uso de PHP para definir variables del modelo
        $modelo_comercial = "Huawei Ascend P7";
        $modelo_tecnico = "P7-L10";
        $lanzamiento = 2014;
    ?>
    
    <h1><?php echo "Ficha del Dispositivo: " . $modelo_comercial; ?></h1>
    
    <div class="intro-text">
        <p>El **<?php echo $modelo_comercial; ?>** (identificado como **<?php echo $modelo_tecnico; ?>**) fue un equipo de gama media-alta que destacó por su diseño delgado y elegante en el año de su lanzamiento, **<?php echo $lanzamiento; ?>**.</p>
    </div>

    <?php
        // 2. Array asociativo PHP para las especificaciones
        $specs = [
            "Dimensiones" => "139.8 x 68.8 x 6.5 mm",
            "Peso" => "124 g",
            "Pantalla" => "5.0 pulgadas IPS LCD (1080 x 1920 píxeles)",
            "Protección" => "Corning Gorilla Glass 3",
            "Procesador" => "HiSilicon Kirin 910T",
            "RAM" => "2 GB",
            "Almacenamiento" => "16 GB (Expandible vía MicroSD)",
            "Cámara Trasera" => "13 MP, f/2.0",
            "Cámara Frontal" => "8 MP",
            "Batería" => "2500 mAh",
            "Sistema Operativo" => "Android 4.4.2 KitKat (EMUI 2.3)",
        ];
    ?>

    <h2>Especificaciones Detalladas</h2>
    
    <ul class="spec-list">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <li>
                <strong><?php echo $caracteristica; ?>:</strong>
                <?php echo $valor; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="note-footer">
        <?php
            // 4. Nota PHP con información de generación
            echo "<em>Datos de la versión principal " . $modelo_tecnico . ". Documento generado el " . date("d/m/Y") . ".</em>";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>