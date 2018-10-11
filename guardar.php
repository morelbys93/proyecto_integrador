<?php
echo "estoy en Guardar.php ";

$_POST["nombre"] = "Ale";

var_dump($_POST);

function guardarUsuario($datos){
  $archivo= file_get_contents("datos.json");
  $guardados=json_decode($archivo,true);
  //$datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
  //unset($datos["contrasena_confirm"]);
  //unset($datos["email_confirm"]);
  $ultimoID=(count($guardados["usuarios"]));
  $target_dir = "assets/uploads/usuarios/$ultimoID/";
  if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
  }
  $usuario=$datos;
  $guardados["usuarios"][]=$usuario;
  $usuarioJson=json_encode($guardados);
  file_put_contents("datos.json",$usuarioJson);
}

guardarUsuario($_POST);
