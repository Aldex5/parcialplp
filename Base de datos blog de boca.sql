CREATE DATABASE blog
USE blog

CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comentario TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM comentarios ORDER BY fecha DESC;