<?php

class Productos
{
  private $nombre;
  private $imagen;
  private $descrip;
  private $tipo;
  private $precio;
  private $id;

    function __construct($nombre, $imagen, $descrip, $tipo, $precio)
    {
      $this-> nombre = $nombre;
      $this-> imagen = $imagen;
      $this-> descripcion = $descrip;
      $this-> tipo = $tipo;
      $this-> precio = $precio;

    }
    public function getNombre(){
      return $this-> nombre;

    }
    public function getImagen(){
      return $this-> imagen;

    }
    public function getDescripcion(){
      return $this-> descripcion;

    }
    public function getTipo(){
      return $this-> tipo;

    }
    public function getPrecio(){
      return $this-> precio;

    }

     public function setNombre($nombre){
       $this-> nombre = $nombre;

     }
     public function setApellido($imagen){
       $this-> imagen = $imagen ;

     }
     public function setUsername($descrip){
       $this-> descripcion = $descrip;

     }
     public function setEmail($tipo){
       $this-> tipo = $tipo;

     }
     public function setContrasena($precio){
       $this-> precio= $precio;

  }
}


 ?>
