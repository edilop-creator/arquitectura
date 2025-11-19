<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/cinzel.css">
</head>
<body>
    <?php include_once('header.php')?>
    <?php include_once('nav.php')?>

    <div class="page-content-wrapper"> 
        <h1>Resultados de Búsqueda</h1>

        <?php
        // 1. Obtener el término de búsqueda
        $query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';

        if (empty($query)) {
            echo "<p>Por favor, introduce un término de búsqueda.</p>";
        } else {
            echo "<h2>Buscando: \"" . htmlspecialchars($query) . "\"</h2>";
            
            // 2. Definir un índice completo de contenidos (Mapeo de nav.php)
            $articulos = [
                // INICIO Y CONTACTANOS
                ['titulo' => 'Inicio', 'url' => '/arquitectura/index.php', 'categoria' => 'General'],
                ['titulo' => 'Contáctanos', 'url' => 'articulos/contactanos.php', 'categoria' => 'General'],
                
                // HARDWARE - INTEL
                ['titulo' => 'Página Principal Intel', 'url' => '/arquitectura/articulos/intel.php', 'categoria' => 'Hardware Intel'],
                ['titulo' => 'Pentium IV', 'url' => '/arquitectura/articulos/pentiumiv.php', 'categoria' => 'Hardware Intel'],
                ['titulo' => 'Intel Core 2 Duo', 'url' => '/arquitectura/articulos/intelcore2duo.php', 'categoria' => 'Hardware Intel'],
                ['titulo' => 'Intel 9 Ultra', 'url' => '/arquitectura/articulos/intel9ultra2.php', 'categoria' => 'Hardware Intel'],
                
                // HARDWARE - AMD
                ['titulo' => 'Página Principal AMD', 'url' => '/arquitectura/articulos/procesadoramd.php', 'categoria' => 'Hardware AMD'],
                ['titulo' => 'AMD Ryzen', 'url' => '/arquitectura/articulos/amdryzen.php', 'categoria' => 'Hardware AMD'],
                ['titulo' => 'AMD FX Series', 'url' => '/arquitectura/articulos/amdfxseries.php', 'categoria' => 'Hardware AMD'],
                ['titulo' => 'AMD Athlon', 'url' => '/arquitectura/articulos/amdathlon.php', 'categoria' => 'Hardware AMD'],

                // SISTEMAS OPERATIVOS - BASE
                ['titulo' => 'Página Principal SO', 'url' => '/arquitectura/articulos/sistemaoperativo.php', 'categoria' => 'Sistemas Operativos'],

                // SISTEMAS OPERATIVOS - WINDOWS
                ['titulo' => 'Página Windows', 'url' => '/arquitectura/articulos/windows.php', 'categoria' => 'Sistemas Operativos Windows'],
                ['titulo' => 'Windows XP', 'url' => '/arquitectura/articulos/windowsxp.php', 'categoria' => 'Sistemas Operativos Windows'],
                ['titulo' => 'Windows Vista', 'url' => '/arquitectura/articulos/windowsvista.php', 'categoria' => 'Sistemas Operativos Windows'],
                ['titulo' => 'Windows 11', 'url' => '/arquitectura/articulos/windows11.php', 'categoria' => 'Sistemas Operativos Windows'],

                // SISTEMAS OPERATIVOS - LINUX
                ['titulo' => 'Página Linux', 'url' => '/arquitectura/articulos/linux.php', 'categoria' => 'Sistemas Operativos Linux'],
                ['titulo' => 'Kali Linux', 'url' => '/arquitectura/articulos/kalilinux.php', 'categoria' => 'Sistemas Operativos Linux'],
                ['titulo' => 'Fedora Linux', 'url' => '/arquitectura/articulos/fedoralinux.php', 'categoria' => 'Sistemas Operativos Linux'],
                ['titulo' => 'Ubuntu', 'url' => '/arquitectura/articulos/ubuntu.php', 'categoria' => 'Sistemas Operativos Linux'],

                // SISTEMAS OPERATIVOS - IOS
                ['titulo' => 'IOS Capitan', 'url' => '/arquitectura/articulos/ios_capitan.php', 'categoria' => 'Sistemas Operativos IOS'],
                ['titulo' => 'IOS Sonoma', 'url' => '/arquitectura/articulos/ios_sono.php', 'categoria' => 'Sistemas Operativos IOS'],
                ['titulo' => 'IOS Monterrey', 'url' => '/arquitectura/articulos/ios_monte.php', 'categoria' => 'Sistemas Operativos IOS'],

                // SMARTPHONES - HUAWEI
                ['titulo' => 'Huawei Stk Lx3', 'url' => '/arquitectura/articulos/stk-lx3.php', 'categoria' => 'Smartphone Huawei'],
                ['titulo' => 'Huawei Y9', 'url' => '/arquitectura/articulos/jkm-lx1.php', 'categoria' => 'Smartphone Huawei'],
                ['titulo' => 'Huawei P7', 'url' => '/arquitectura/articulos/p7-l10.php', 'categoria' => 'Smartphone Huawei'],

                // SMARTPHONES - IPHONE
                ['titulo' => 'Iphone 17 pro max', 'url' => '/arquitectura/articulos/iph_17_pm.php', 'categoria' => 'Smartphone Iphone'],
                ['titulo' => 'Iphone Se', 'url' => '/arquitectura/articulos/iph_se.php', 'categoria' => 'Smartphone Iphone'],
                ['titulo' => 'Iphone X', 'url' => '/arquitectura/articulos/iph_x.php', 'categoria' => 'Smartphone Iphone'],

                // SMARTPHONES - SAMSUNG
                ['titulo' => 'Samsung Ace', 'url' => '/arquitectura/articulos/sm-ace.php', 'categoria' => 'Smartphone Samsung'],
                ['titulo' => 'Samsung Music', 'url' => '/arquitectura/articulos/sm-music.php', 'categoria' => 'Smartphone Samsung'],
                ['titulo' => 'Samsung Note', 'url' => '/arquitectura/articulos/sm-note.php', 'categoria' => 'Smartphone Samsung'],
                
                // SECCIONES DEL FOOTER (Instituto) - (Asumiendo que están en la carpeta 'instituto')
                ['titulo' => 'Biblioteca', 'url' => '/arquitectura/instituto/biblioteca.php', 'categoria' => 'Instituto'],
                ['titulo' => 'Tutorías', 'url' => '/arquitectura/instituto/tutorias.php', 'categoria' => 'Instituto'],
                ['titulo' => 'Directorio', 'url' => '/arquitectura/instituto/directorio.php', 'categoria' => 'Instituto'],
            ];

            $resultados = [];
            
            // 3. Iterar y buscar coincidencias
            foreach ($articulos as $articulo) {
                // Combina el título, categoría y URL para una búsqueda más amplia
                $contenido_articulo = strtolower($articulo['titulo'] . ' ' . $articulo['categoria'] . ' ' . $articulo['url']);
                
                if (strpos($contenido_articulo, $query) !== false) {
                    $resultados[] = $articulo;
                }
            }

            // 4. Mostrar resultados
            if (count($resultados) > 0) {
                echo "<h3>Se encontraron " . count($resultados) . " resultados:</h3>";
                echo "<ul>";
                foreach ($resultados as $res) {
                    echo "<li>";
                    echo "<a href=\"" . htmlspecialchars($res['url']) . "\">" . htmlspecialchars($res['titulo']) . "</a>";
                    echo " <span class='categoria'>(" . htmlspecialchars($res['categoria']) . ")</span>";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No se encontraron resultados para el término \"<strong>" . htmlspecialchars($query) . "</strong>\".</p>";
            }
        }
        ?>
    </div>

    <?php include_once('footer.php')?>
</body>
</html>