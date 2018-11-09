<?php

 class User
 {
   private $nombre;
   private $apellido;
   private $usuario;
   private $email;
   private $contrasena;
   private $id;

   function __construct($nombre, $apellido, $usuario, $correo, $contrasena)
   {
     $this-> nombre = $nombre;
     $this-> apellido = $apellido;
     $this-> usuario = $usuario;
     $this-> email = $email;
     $this-> contrasena = $contasena;

   }
   //Getters
   public function getNombre(){
     return $this-> nombre;

   }
   public function getApellido(){
     return $this-> apellido;

   }
   public function getUsuario(){
     return $this-> usuario;

   }
   public function getEmail(){
     return $this-> email;

   }
   public function getContrasena(){
     return $this-> contrasena;

   }
   //SETTERS
    public function setNombre($nombre){
      $this-> nombre = $nombre;

    }
    public function setApellido($apellido){
      $this-> apellido = $apellido;

    }
    public function setUsername($usuario){
      $this-> usuario = $usuario;

    }
    public function setEmail($email){
      $this-> email = $email;

    }
    public function setContrasena($contrasena){
      $this-> contrasena= $contrasena;

    }
 }
 ?>
