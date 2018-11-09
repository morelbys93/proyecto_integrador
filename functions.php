<?php
session_start();

function validacionRegistro($datos){
$errores=[];
if (strlen($datos["nombre"])<2) {
  $errores["nombre"]="Nombre no valido";
}
if (strlen($datos["apellido"])<2) {
  $errores["apellido"]="Apellido no valido";
}
if (validarSiExiste($datos["username"],$datos["email"])) {
 $errores["username"]="Ya existe este usuario o mail";
}
if (strlen($datos["contrasena"])<7) {
  $errores["contrasena"]="Contraseña demasiado corta";
}
if ($datos["contrasena"]!=$datos["contrasena_confirm"]) {
  $errores["contrasena_conf"]="No concuerdan las contraseñas";
}
if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
  $errores["email"]="No ingreso un email valido";
}
if ($datos["email"]!=$datos["email_confirm"]) {
  $errores["email_conf"]="No concuerdan los emails";
}

return $errores;
}


function guardarUsuario($datos){
  $archivo= file_get_contents("datos.json");
  $guardados=json_decode($archivo,true);
  $datos["contrasena"]=password_hash($datos["contrasena"],PASSWORD_DEFAULT);
  unset($datos["contrasena_confirm"]);
  unset($datos["email_confirm"]);
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
 function guardarUsuarioMysql($usuario){


 }
function validarSiExiste($username,$email){
  $archivo= file_get_contents("datos.json");
  $datos= json_decode($archivo,true);
  $disponible= true;
  for ($i=0; $i < count($datos["usuarios"]); $i++) {
    if ($datos["usuarios"][$i]["username"]==$username||$datos["usuarios"][$i]["email"]==$email) {
      return true;
    }
  }
}
  //function logearUsuario($datosLogin){
  //    $archivo= file_get_contents("datos.json");
  //    $datos= json_decode($archivo,true);
  //    for ($i=0; $i < count($datos["usuarios"]); $i++) {
  //      if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
   //       if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
   //         session_start();
   //         $_SESSION['user']= $datos["usuarios"][$i]["username"];
   //         header("location:perfil.php");
  //        }
 //       }
 //     }
//}

function logearUsuario($datosLogin){
  $archivo= file_get_contents("datos.json");
  $datos= json_decode($archivo,true);
  for ($i=0; $i < count($datos["usuarios"]); $i++) {
    if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
      if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
        session_start();
        $_SESSION['user']= $datos["usuarios"][$i]["username"];
        $_SESSION['nombre']=$datos["usuarios"][$i]["nombre"];
        setcookie("perfil", $datos["usuarios"], time() + (86400 * 30));

        header("location:perfil.php");
      }
      function logout()
      {
          if(!isset($_SESSION)) {
              session_start();
          }
          session_destroy();
          setcookie('email', null, time() -1);
          redirect('register.php');

      }

    }
  }
}
