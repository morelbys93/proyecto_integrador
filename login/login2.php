<?php
//require 'funciones.php';
if ($_POST) {
  loginUsuario($_POST);
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Queen Candy | login</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <input type="text" placeholder="usuario">
      <input type="text" placeholder="password">
      <button>login</button>
      <p class="registro">No se encuentra registrado?<a href=""> Crear una cuenta</a></p>
    </div>
  </div>
</body>
</html>
