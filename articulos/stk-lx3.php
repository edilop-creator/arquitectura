<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Especificaciones: Huawei Y9 Prime 2019 (STK-LX3)"; ?></title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff; /* Un color azul llamativo para el título */
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .spec-table th, .spec-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .spec-table th {
            background-color: #e9ecef;
            width: 35%;
            font-weight: bold;
        }
        .note {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

<div class="container">
    <img src="images/huawei-y9-prime.jpg" width="300px"> 
    <?php
        // 1. Uso de PHP para definir y cargar dinámicamente el título
        $modelo = "STK-LX3";
        $nombre_comercial = "Huawei Y9 Prime 2019";
    ?>
    <h1><?php echo "Ficha Técnica: " . $nombre_comercial . " (" . $modelo . ")"; ?></h1>

    <?php
        // 2. Uso de un array PHP para almacenar las especificaciones (datos dinámicos)
        $specs = [
            "Pantalla" => "6.59\" Ultra FullView (2340 x 1080)",
            "Procesador" => "Kirin 710F Octa-core (4x2.2 GHz + 4x1.7 GHz)",
            "RAM" => "4 GB",
            "Almacenamiento" => "128 GB (Expandible hasta 512 GB)",
            "Cámara Trasera" => "Triple: 16 MP + 8 MP (Ultra Gran Angular) + 2 MP (Profundidad)",
            "Cámara Frontal" => "16 MP (Pop-up/Emergente)",
            "Batería" => "4000 mAh",
            "Sistema Operativo" => "Android 9.0 (EMUI 9.0)",
        ];
    ?>

    <h2>Especificaciones Principales</h2>
    
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
            // 4. Uso de PHP para una nota final
            $fecha_actual = date("d/m/Y");
            echo "<em>Nota: El modelo " . $modelo . " es conocido por su cámara frontal Pop-up. Datos consultados al " . $fecha_actual . ".</em>";
        ?>
    </div>
</div>
    <?php include_once('../componentes/footer.php')?>
</body>
</html>