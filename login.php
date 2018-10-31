

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
    <link rel="stylesheet" href="css/stylelog.css">
    <title>QueenCandy | LOGIN</title>

    <link rel="icon" href="images/ico.jpg" type="image/x-icon">
  </head>
  <body>
    <a href="home.php">
      <header class="main-header">
      <img src="images/queen_candy.png" alt="logotipo" class="logo">
      </header>
    </a>
    <div class="container">
      <form class="form" role="form" action="" method="post" enctype="multipart/form-data">
        <input type="text" id="usuario" name="usuario" placeholder="usuario">
        <input type="text" id="password" name="password" placeholder="password">
        <button type="submit">login</button>
        <p class="registro">No se encuentra registrado?<a href="registro.php"> Crear una cuenta</a></p>
      </form>
    </div>
  </body>
  </html>
