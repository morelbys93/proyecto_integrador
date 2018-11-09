

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

    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">

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
        <input type="text" id="usuario" name="username" placeholder="Ingrese su usuario">
        <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña">
        <button type="submit">login</button>
        <p class="registro">No se encuentra registrado?<a href="registro.php"> Crear una cuenta</a></p>
      </form>
    </div>
  </body>


  </html>
