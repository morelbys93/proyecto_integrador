CREATE DATABASE queencandy_db;
USE queencandy_db;

CREATE TABLE Usuarios(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user varchar(40) UNIQUE NOT NULL,
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    pass varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    date_created DATETIME NOT NULL DEFAULT NOW()
);

CREATE TABLE Carrito(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(4) unsigned NOT NULL FOREIGN KEY,
    product_id int(4) unsigned NOT NULL FOREIGN KEY,
    producto varchar(100) NOT NULL,
    cantidad int(100) NOT NULL,
    precio_producto int() NOT NULL, FOREIGN KEY,
    
);

