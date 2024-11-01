CREATE DATABASE yucafood;

CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    contraseña VARCHAR(30) NOT NULL,
    nombre_mascota VARCHAR(30) NOT NULL
)

CREATE TABLE platillos(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    prev_descripcion TEXT,
    descricion LONGTEXT
)