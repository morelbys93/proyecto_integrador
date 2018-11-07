CREATE DATABASE queencandy_db;
USE queencandy_db;

CREATE TABLE Tipo de usuario(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo int(4) NOT NULL, FOREIGN KEY,
);
CREATE TABLE Personas(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_tipo int(2) NOT NULL, FOREIGN KEY,
    user varchar(40) UNIQUE NOT NULL,
    nombre varchar(100) NOT NULL,
    apellido varchar(100) NOT NULL,
    pass varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    dni int(9) NOT NULL,
    date_created DATETIME NOT NULL DEFAULT NOW()
);
CREATE TABLE Empresas(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user varchar(40) UNIQUE NOT NULL,
    razon_social varchar(100) NOT NULL,
    pass varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    cuit int(11) NOT NULL,
    date_created DATETIME NOT NULL DEFAULT NOW()
);

CREATE TABLE Productos(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre int(4) unsigned NOT NULL FOREIGN KEY,
    tipo varchar(100) NOT NULL FOREIGN KEY,
    precio varchar(100) NOT NULL,
    descripcion varchar(255) NOT NULL,
    foto varchar(255) NOT NULL,
    
);
CREATE TABLE Tipo Producto(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo varchar(100) NOT NULL FOREIGN KEY,
      
);
CREATE TABLE Carrito(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(4) unsigned NOT NULL FOREIGN KEY,
    product_id int(4) unsigned NOT NULL FOREIGN KEY,
    producto varchar(100) NOT NULL,
    cantidad int(100) NOT NULL,
    precio_producto int() NOT NULL, FOREIGN KEY,
    subtotal int() NOT NULL, FOREIGN KEY,
    forma_envio varchar(100) NOT NULL, FOREIGN KEY,
    forma_pago varchar(100) NOT NULL, FOREIGN KEY,
    forma_factura varchar(100) NOT NULL, FOREIGN KEY,
    datos_envio varchar(100)NOT NULL, FOREIGN KEY,
        
);
CREATE TABLE Tipo Envio(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo varchar(100) NOT NULL FOREIGN KEY,
      
);
CREATE TABLE Forma de Pago(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo varchar(100) NOT NULL FOREIGN KEY,
      
);
CREATE TABLE Datos de envio(
    id int(4) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    domicilio varchar(100) NOT NULL,
    ciudad varchar(100) NOT NULL,  
    domicilio varchar(100) NOT NULL,
    codigo_postal int(6) NOT NULL,
    horario varchar(100) NOT NULL,
);

