<?php
function validacionRegistro($datos){
$errores=[];
if (strlen($datos["nombre"])<2) {
  $errores["nombre"]="Nombre no valido";
}
if (strlen($datos["apellido"])<2) {
  $errores["apellido"]="Apellido no valido";
}
//si es true significa que ya existe el usuario y que no esta disponible
if (validarSiExiste($datos["username"],$datos["email"])) {
 $errores["username"]="ya existe este usuario o mail";
}
if (strlen($datos["contrasena"])<7) {
  $errores["contrasena"]="Contraseña demasiado corta";
}
if ($datos["contrasena"]!=$datos["contrasena_confirm"]) {
  $errores["contrasena_conf"]="No concuerdan las contraseñas";
}
if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
  $errores["email"]="no ingreso un email valido";
}
if ($datos["email"]!=$datos["email_confirm"]) {
  $errores["email_conf"]="no concuerdan los emails";
}
return $errores;
}

function guardarUsuario($datos){
  //abrir archivo
  $archivo= file_get_contents("datos.json");
  //Convertir el archivo en algo utilizable por php (sino es un string largo)
  $guardados=json_decode($archivo,true);
  //encryptar contraseña
  $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
  //borro la confirmacion de la contraseña ya que solamente me servia para validar
  unset($datos["contrasena_confirm"]);
  //idem
  unset($datos["email_confirm"]);
  //traigo el id del ultimo usuario.
  $ultimoID=(count($guardados["usuarios"]));
  //donde vamos a guardar la imagen
  $target_dir = "assets/uploads/usuarios/$ultimoID/";
  //me fijo si ya existe la carpeta con el id del usuario
  if (!is_dir($target_dir)) {
    //si no existe la creo
    mkdir($target_dir, 0777, true);
  }
  $usuario=$datos;
  //pusheo los datos a la posicion usuarios
  $guardados["usuarios"][]=$usuario;
  //re escribo TODOS los datos que tengo (el json que traje + los datos nuevos)
  $usuarioJson=json_encode($guardados);
  //escribo el archivo y lo cierro
  file_put_contents("datos.json",$usuarioJson);
}
function validarSiExiste($username,$email){
  //abro archivo
  $archivo= file_get_contents("datos.json");
  //Convertir el archivo en algo utilizable por php (sino es un string largo)
  $datos= json_decode($archivo,true);
  //recorro TODOS LOS USUARIOS
  $disponible= true;
  for ($i=0; $i < count($datos["usuarios"]); $i++) {
    //Me fijo si el usuario ingresado ya existe
    if ($datos["usuarios"][$i]["username"]==$username||$datos["usuarios"][$i]["email"]==$email) {
      //si existe rompo(false == no esta disponible ese usuario (osea ya existe))
      return true;
    }
  }
}
  function logearUsuario($datosLogin){
      //abro archivo
      $archivo= file_get_contents("datos.json");
      //Convertir el archivo en algo utilizable por php (sino es un string largo)
      $datos= json_decode($archivo,true);
      //recorro TODOS LOS USUARIOS
      for ($i=0; $i < count($datos["usuarios"]); $i++) {
        //valido que exista el usuario ingresado en el formulario en mi json
        if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
          //Me fijo la contraseña
          if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
            //inicio la session con el usuario que corresponde y lo mando a su perfil
            session_start();
            $_SESSION['user']= $datos["usuarios"][$i]["username"];
            header("location:perfil.php");
          }
        }
      }
}
