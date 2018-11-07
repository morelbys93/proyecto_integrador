<?php
function loginUsuario($datoslogin){
  $archivo= file_get_contents("../datos.json");
  $datos= json_decode($archivo,true);

  for ($i=0; $i < count($datos["usuarios"]); $i++) {
    if ($datos["usuarios"][$i]["username"]==$datosLogin["username"]) {
      if (password_verify($datosLogin["contrasena"],$datos["usuarios"][$i]["contrasena"])) {
        session_start();
        $_SESSION['user']= $datos["usuarios"][$i]["username"];
        header("location:perfil.php");
}
 ?>
