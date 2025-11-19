
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚙️ Procesadores Intel: Arquitectura x86</title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
    </head>
<body>
    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

    <div class="page-content-wrapper">
        <header>
            <h1>🏭 Intel Corporation y la Arquitectura x86</h1>
            <p>Intel es el mayor fabricante de microprocesadores del mundo, impulsando la mayoría de las computadoras personales (PCs) y servidores. Sus productos se basan en la arquitectura de conjunto de instrucciones x86.</p>
            <hr>
        </header>

        <main>
            <section>
                <h2>🖥️ Familias de Procesadores de Consumo (Intel Core)</h2>
                <p>La línea Intel Core es la más reconocida y se clasifica según el rendimiento para diferentes segmentos de usuarios:</p>
                <ul>
                    <li><strong>Core i3:</strong> Nivel de entrada. Ideal para tareas cotidianas, navegación y ofimática.</li>
                    <li><strong>Core i5:</strong> Nivel medio. Excelente equilibrio entre precio y rendimiento, adecuado para *gaming* y productividad general.</li>
                    <li><strong>Core i7:</strong> Alto rendimiento. Orientado a la creación de contenido avanzado, multitarea intensiva y juegos de alta exigencia.</li>
                    <li><strong>Core i9:</strong> Máximo rendimiento. Diseñado para entusiastas y profesionales que requieren la mayor potencia en un solo chip de consumo.</li>
                </ul>
            </section>

            <section>
                <h2>🔢 Sufijos Comunes en la Nomenclatura</h2>
                <p>Las letras al final del número del modelo indican las capacidades y el diseño del procesador:</p>
                <dl>
                    <dt><strong>K</strong> (ej. i9-14900K)</dt>
                    <dd>Indica que el multiplicador está **desbloqueado**, permitiendo el *overclocking* manual para aumentar la velocidad.</dd>

                    <dt><strong>F</strong> (ej. i5-14400F)</dt>
                    <dd>Indica que el procesador **no tiene gráficos integrados** (iGPU) y requiere una tarjeta gráfica dedicada.</dd>

                    <dt><strong>KF</strong> (ej. i7-14700KF)</dt>
                    <dd>Combinación de las dos anteriores: desbloqueado para *overclocking* y sin gráficos integrados.</dd>

                    <dt><strong>H</strong> (ej. i7-13700H)</dt>
                    <dd>Diseñado para **portátiles de alto rendimiento**, equilibrando potencia y eficiencia en un factor de forma móvil.</dd>
                </dl>
            </section>

            <section>
                <h2>💡 Arquitectura y Tecnología</h2>
                <p>Los procesadores Intel utilizan una arquitectura **CISC** (Complex Instruction Set Computer), que a pesar de su complejidad, ofrece alta compatibilidad y rendimiento. Las generaciones más recientes emplean un diseño híbrido con:</p>
                <ul>
                    <li><strong>P-Cores (Performance Cores):</strong> Núcleos de alto rendimiento para tareas que necesitan velocidad.</li>
                    <li><strong>E-Cores (Efficiency Cores):</strong> Núcleos de eficiencia para manejar tareas en segundo plano y optimizar el consumo de energía.</li>
                </ul>
            </section>
        </main>

    </div>

    <?php include_once('../componentes/footer.php')?>

</body>
</html>