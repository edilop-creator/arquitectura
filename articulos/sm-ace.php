<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Ficha Técnica: Samsung Galaxy Ace S5830"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #121f6a; /* Azul oscuro corporativo de Samsung */
            text-align: center;
            border-bottom: 3px solid #121f6a;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .intro-text {
            text-align: center;
            margin-bottom: 25px;
            font-style: italic;
        }
        .specs-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
        }
        .specs-table th, .specs-table td {
            padding: 12px;
            text-align: left;
        }
        .specs-table th {
            background-color: #e0f7fa; /* Azul muy claro */
            color: #00796b; /* Verde azulado */
            width: 45%;
            font-weight: bold;
            border-radius: 5px 0 0 5px;
        }
        .specs-table td {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-left: none;
            border-radius: 0 5px 5px 0;
        }
        .note {
            margin-top: 30px;
            padding: 15px;
            background-color: #fff8e1;
            border-left: 5px solid #ffc107; /* Amarillo */
            color: #795548;
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
        // 1. Uso de PHP para definir variables del modelo
        $modelo_comercial = "Samsung Galaxy Ace";
        $modelo_tecnico = "S5830";
        $lanzamiento = 2011;
    ?>
    
    <h1>⭐ Ficha Técnica: <?php echo $modelo_comercial; ?> (<?php echo $lanzamiento; ?>)</h1>
    
    <p class="intro-text">
        El **<?php echo $modelo_comercial; ?>** (modelo **<?php echo $modelo_tecnico; ?>**) fue uno de los teléfonos más icónicos de la gama media de Android de su época.
    </p>

    <?php
        // 2. Array PHP con las especificaciones clave
        $specs = [
            "Lanzamiento" => $lanzamiento,
            "Pantalla" => "3.5 pulgadas TFT (320 x 480 píxeles)",
            "Procesador" => "Qualcomm MSM7227 (800 MHz)",
            "Memoria RAM" => "278 MB",
            "Almacenamiento Interno" => "158 MB (Expandible vía MicroSD)",
            "Cámara Principal" => "5 MP con flash LED",
            "Cámara Frontal" => "No",
            "Sistema Operativo (Inicial)" => "Android 2.2 Froyo (Actualizable a 2.3 Gingerbread)",
            "Batería" => "1350 mAh"
        ];
    ?>

    <h2>Detalles Técnicos</h2>
    
    <table class="specs-table">
        <?php foreach ($specs as $caracteristica => $valor) : ?>
            <tr>
                <th><?php echo $caracteristica; ?></th>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="note">
        <?php
            // 4. Nota PHP con información adicional
            echo "El **Galaxy Ace** se distinguió por su diseño compacto, similar al del Galaxy S de la época, y por su éxito en los mercados en desarrollo. ¡Una leyenda de Android!";
        ?>
    </div>
</div>
<?php include_once('../componentes/footer.php')?>

</body>
</html>