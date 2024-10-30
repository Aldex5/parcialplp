<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opción B </title>
    <link rel="stylesheet" href="css/ea_style.css">
    <script src="Javascript/ea_scripts.js"></script>
</head>
<body>
    <header>
        <img src="Imagenes/ea_logo_boca.png" alt="Logo Boca Juniors" class="logo">
        <h1>Bienvenido a Mi Blog de Bokita Jrs</h1>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#publicaciones">Publicaciones</a>
            <a href="#sobre-mi">Sobre mí</a>
        </nav>
    </header>

    <section id="inicio">
        <h2>Inicio</h2>
        <p>Temas que se debaten en el blog</p>
    </section>

    <section id="publicaciones">
        <h2>Publicaciones</h2>
        <article>
            <h3>Primera publicación</h3>
            <p>Primera publicación del blog</p>
             <img src="Imagenes/ea_logo_boca.png" alt="Logo Boca Juniors" class="logo">
        </article>

        <div id="comments">
            <h3>Comentarios</h3>
            <ul id="comment-list">
                <?php
                include 'php/ea_conexion.php';

                // Obtengo y muestro los comentarios
                $result = $conn->query("SELECT * FROM comentarios ORDER BY fecha DESC");
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row['comentario']) . " - " . $row['fecha'] . "</li>";
                }

                $conn->close();
                ?>
            </ul>

            <!-- Formulario de comentarios -->
            <form id="comment-form" action="php/ea_guardar_comentario.php" method="post">
                <input type="text" name="comentario" id="comment-input" placeholder="Escribe un comentario..." required>
                <button type="submit">Enviar</button>
            </form>

        </div>
    </section>

    <section id="sobre-mi">
        <h2>Sobre mí</h2>
        <p>Soy Exequiel Alderete y estoy haciendo un parcial</p>
    </section>

    <footer>
        <p>&copy; Parcial de Paradigmas y Lenguajes de Programacion III</p>
    </footer>
</body>
</html>
