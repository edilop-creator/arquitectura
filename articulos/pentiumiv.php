<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚙️ Procesador Intel Pentium IV</title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
</head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

    <div class="page-content-wrapper">
        <header>
            <h1>Intel Pentium IV: La Era NetBurst</h1>
            <p>El <strong>Pentium IV (P4)</strong> fue la cuarta generación importante de procesadores Intel. Se lanzó en el año 2000 y se caracterizó por introducir la microarquitectura <strong>NetBurst</strong>, diseñada para alcanzar y sostener altas velocidades de reloj.</p>
            <hr>
        </header>

        <main>
            <section>
                <h2>🚀 La Microarquitectura NetBurst</h2>
                <p>La filosofía de NetBurst era simple: maximizar la frecuencia de reloj (GHz) mediante el uso de una <strong>tubería (pipeline) de instrucciones muy profunda</strong>. Esto permitió al P4 ser el primer procesador en la línea de Intel en superar la barrera de 3 GHz, aunque también presentó desafíos.</p>
                <ul>
                    <li><strong>Pipeline Largo:</strong> Aunque permitía una alta frecuencia, si una instrucción fallaba (un error de predicción), el procesador tenía que vaciar y recargar muchos pasos, reduciendo la eficiencia.</li>
                    <li><strong>Hyper-Threading (HT):</strong> Tecnología clave introducida en algunos modelos P4. Permite que un solo núcleo físico actúe como dos hilos de ejecución lógicos, mejorando el rendimiento en multitarea.</li>
                    <li><strong>Bus de Sistema (FSB):</strong> La velocidad del bus frontal se incrementó progresivamente, llegando a 800 MHz en modelos posteriores.</li>
                </ul>
            </section>

            <section>
                <h2>🔥 Modelos y Desafíos</h2>
                <p>El P4 se lanzó inicialmente para el <strong>Socket 423</strong>, pasando luego al más común <strong>Socket 478</strong>, y finalmente al <strong>LGA 775</strong>. Sus mayores problemas fueron el <strong>alto consumo de energía</strong> y la consecuente generación de <strong>exceso de calor</strong>, lo que limitó su escalabilidad y eventual caída frente a la competencia.</p>
                <table border="1">
                    <caption>Ejemplos de Procesadores y Zócalos</caption>
                    <thead>
                        <tr>
                            <th>Modelo Clave</th>
                            <th>Arquitectura</th>
                            <th>Zócalo (Socket)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Willamette</td>
                            <td>NetBurst</td>
                            <td>Socket 423 / 478</td>
                        </tr>
                        <tr>
                            <td>Northwood</td>
                            <td>NetBurst</td>
                            <td>Socket 478</td>
                        </tr>
                        <tr>
                            <td>Prescott</td>
                            <td>NetBurst (Más profundo)</td>
                            <td>Socket 478 / LGA 775</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <?php include_once('../componentes/footer.php')?>
    

</body>
</html>