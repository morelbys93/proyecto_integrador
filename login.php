<?php
require "functions.php";
if ($_POST) {
  logearUsuario($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>QueenCandy | LOGIN</title>
  <!-- Favicon -->
  <link rel="icon" href="../images/ico.jpg" type="image/x-icon">
</head>
<body>
  header class="main-header">
  <img src="images/queen_candy.png" alt="logotipo" class="logo">
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
