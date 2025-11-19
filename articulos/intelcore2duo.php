<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚙️ Procesador Intel Core 2 Duo</title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

    <div class="page-content-wrapper">
        <header>
            <h1>Intel Core 2 Duo: El Fin de la Era NetBurst</h1>
            <p>El <strong>Intel Core 2 Duo</strong>, lanzado en 2006, marcó un punto de inflexión crucial para Intel. Esta línea de procesadores introdujo la microarquitectura **Core**, que abandonó la filosofía de alta frecuencia y baja eficiencia del anterior Pentium IV (NetBurst) para centrarse en un alto rendimiento por ciclo de reloj (IPC).</p>
            <hr>
        </header>

        <main>
            <section>
                <h2>🚀 Características Fundamentales</h2>
                <p>La principal característica del Core 2 Duo fue la integración de **dos núcleos de procesamiento** en un solo chip. Sus mejoras clave incluyeron:</p>
                <ul>
                    <li><strong>Arquitectura Core:</strong> En lugar de buscar frecuencias elevadas, se enfocó en hacer que cada ciclo de reloj ejecutara muchas más instrucciones (alto IPC).</li>
                    <li><strong>Doble Núcleo:</strong> La capacidad nativa de procesamiento paralelo mejoró drásticamente el rendimiento en tareas multitarea.</li>
                    <li><strong>Eficiencia Energética:</strong> Redujo significativamente el consumo de energía y la generación de calor en comparación con el Pentium IV. Esto lo hizo ideal tanto para computadoras de escritorio como portátiles.</li>
                    <li><strong>Memoria Caché Compartida:</strong> Los dos núcleos compartían un gran bloque de memoria caché L2, permitiendo una comunicación y acceso a datos más rápidos entre ellos.</li>
                </ul>
            </section>

            <section>
                <h2>💻 Plataformas y Variantes</h2>
                <p>El Core 2 Duo fue inmensamente popular y se utilizó en la plataforma **LGA 775** y tuvo variantes específicas para diferentes segmentos:</p>
                <table border="1">
                    <caption>Variantes Comunes del Core 2</caption>
                    <thead>
                        <tr>
                            <th>Serie</th>
                            <th>Segmento</th>
                            <th>Núcleos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Core 2 Duo (E6000 / T7000)</td>
                            <td>Consumo General</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Core 2 Quad (Q6000 / Q9000)</td>
                            <td>Alto Rendimiento</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Core 2 Extreme</td>
                            <td>Entusiastas / Desbloqueado</td>
                            <td>2 o 4</td>
                        </tr>
                    </tbody>
                </table>
                <p>El éxito del Core 2 Duo redefinió el estándar de rendimiento en la computación personal y sirvió de base para las futuras y exitosas arquitecturas **Intel Core i**.</p>
            </section>
        </main>
    </div>

        <?php include_once('../componentes/footer.php')?>


</body>
</html>