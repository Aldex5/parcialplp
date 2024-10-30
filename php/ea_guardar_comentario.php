<?php
include 'ea_conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comentario = $conn->real_escape_string($_POST['comentario']);
    $sql = "INSERT INTO comentarios (comentario) VALUES ('$comentario')";

    if ($conn->query($sql) === TRUE) {
        echo "Comentario guardado correctamente";
    } else {
        echo "Error al guardar el comentario: " . $conn->error;
    }
}

$conn->close();

// Redirige de vuelta a la página principal después de guardar el comentario
header("Location: ../index.php");
exit();
