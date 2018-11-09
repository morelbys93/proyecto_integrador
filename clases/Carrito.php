<?php

class Carrito
{
  private $articulo;
  private $cantidad;
  private $usuario;
  private $calculoTotal;
  private $id;

  function __construct($articulo, $cantidad, $usuario, $calculoTotal)
  {
    $this-> articulo = $articulo;
    $this-> cantidad = $cantidad;
    $this-> usuario = $usuario;
    $this-> calculoTotal = $calculoTotal;


  }
  //Getters
  public function getArticulo(){
    return $this-> articulo;

  }
  public function getCantidad(){
    return $this-> cantidad;

  }
  public function getUsuario(){
    return $this-> usuario;

  }
  public function getCalculoTotal(){
    return $this-> calculoTotal;

  }

  //SETTERS
   public function setNombre($nombre){
     $this-> nombre = $nombre;

   }
   public function setApellido($cantidad){
     $this-> cantidad = $cantidad;

   }
   public function setUsername($usuario){
     $this-> usuario = $usuario;

   }
   public function setEmail($email){
     $this-> email = $email;

   }
   public function setCalculoTotal($calculoTotal){
     $this-> calculoTotal= $calculoTotal;

   }
}



?>
