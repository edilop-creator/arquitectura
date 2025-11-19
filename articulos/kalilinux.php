<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¿Qué es Kali Linux?</title>
    <link rel="stylesheet" href="/arquitectura/css/estilos.css">
    <link rel="stylesheet" href="/arquitectura/css/cinzel.css">
</head>
<body>

    <?php include_once('../componentes/header.php')?>
    <?php include_once('../componentes/nav.php')?>

    <div class="page-content-wrapper">
        <h1>Kali Linux: La Plataforma de Pruebas de Penetración</h1>
        <hr>

        <h2>1. Definición y Propósito</h2>
        <p>
            Kali Linux es una distribución del sistema operativo GNU/Linux. Es desarrollada y mantenida por **Offensive Security**.
        </p>
        <p>
            Su propósito principal no es el uso diario, sino ser una herramienta especializada para profesionales de la seguridad informática, como:
        </p>
        <ul>
            <li><strong>Pruebas de Penetración (Pentesting):</strong> Simular ataques para encontrar vulnerabilidades en sistemas, redes y aplicaciones.</li>
            <li><strong>Auditoría de Seguridad:</strong> Revisar la seguridad de infraestructuras de red y sistemas.</li>
            <li><strong>Análisis Forense Digital:</strong> Recolectar y analizar evidencia digital.</li>
        </ul>

        <h2>2. Bases y Características</h2>
        <p>Kali se distingue por las siguientes características:</p>
        <ul>
            <li><strong>Distribución Base:</strong> Está basado en la distribución **Debian**, conocida por su estabilidad y vasto repositorio de software.</li>
            <li><strong>Colección de Herramientas:</strong> Viene preinstalado con más de 600 programas específicos para tareas de seguridad, lo que ahorra tiempo a los usuarios.</li>
            <li><strong>Código Abierto:</strong> Al igual que Linux en general, es de código abierto.</li>
        </ul>

        <h2>3. Herramientas Integradas Destacadas</h2>
        <p>Algunas de las herramientas más conocidas que incluye Kali son:</p>
        <ol>
            <li><strong>Nmap:</strong> Escáner de seguridad para descubrimiento de redes y auditoría de puertos.</li>
            <li><strong>Metasploit Framework:</strong> Herramienta poderosa para desarrollar y ejecutar código de explotación contra máquinas remotas.</li>
            <li><strong>Wireshark:</strong> Analizador de tráfico de red para inspección profunda de protocolos.</li>
            <li><strong>Aircrack-ng:</strong> Suite de herramientas para evaluar la seguridad de redes inalámbricas (Wi-Fi).</li>
            <li><strong>Burp Suite:</strong> Plataforma para probar la seguridad de aplicaciones web.</li>
        </ol>

        <h2>4. Advertencia Importante</h2>
        <blockquote cite="Offensive Security">
            <strong>Kali Linux no es para principiantes en seguridad.</strong> Debido a que contiene herramientas poderosas que pueden causar daños serios, solo debe ser utilizado en entornos autorizados y legales.
        </blockquote>

    </div>

    <?php include_once('../componentes/footer.php')?>
</body>
</html>