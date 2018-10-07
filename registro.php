<?php
require "functions.php";
if ($_POST) {
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$usuario=$_POST["username"];
	$email=$_POST["email"];

	$errores=validacionRegistro($_POST);
	var_dump($errores);
	if (empty($errores)) {
		guardarUsuario($_POST);
	}
}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- My CSS -->

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleregistro.css">

		<link rel="icon" href="images/ico.jpg" type="image/x-icon">

		<title> QueenCandy | REGISTRO </title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<a href="home.php">
      <header class="main-header">
      <img src="images/queen_candy.png" alt="logotipo" class="logo">
		  </header>
    </a>

<div class="formulario">

	<div class="row">
		<form role="form" action="" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo (!empty($nombre))?$nombre:""; ?>" placeholder="Ingrese Nombre">
					<?php echo (isset($errores["nombre"]))?'<p style="color:red;">'.$errores["nombre"].'</p>':""; ?>
				</div>
				<div class="form-group col-sm-6">
					<label for="apellido">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo (!empty($apellido))?$apellido:""; ?>" placeholder="Ingrese Apellido">
					<?php if (isset($errores["apellido"]))?'<p style="color:red;">'.$errores["apellido"].'</p>':""; ?> {
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="username">Nombre de Usuario</label>
					<input type="text" class="form-control" id="username" name="username" value="<?php echo (!empty($usuario))?$usuario:""; ?>" placeholder="Ingrese Nombre de Usuario">
					<?php echo (isset($errores["username"]))?'<p style="color:red;">'.$errores["username"].'</p>':""; ?>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo (!empty($email))?$email:""; ?>" placeholder="Ingrese Email">
					<?php echo (isset($errores["email"]))?'<p style="color:red;">'.$errores["email"].'</p>':""; ?>
						<?php echo (isset($errores["email_conf"]))?'<p style="color:red;">'.$errores["email_conf"].'</p>':""; ?>
				</div>
				<div class="form-group col-sm-6">
					<label for="email-confirm">Confirmar Email</label>
					<input type="text" class="form-control" id="email-confirm" name="email_confirm" value="" placeholder="Ingrese Confirmación Email">
						<?php echo (isset($errores["email_conf"]))?'<p style="color:red;">'.$errores["email_conf"].'</p>':""; ?>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label for="contrasena">Contraseña</label>
					<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
					<?php echo (isset($errores["contrasena"]))?'<p style="color:red;">'.$errores["contrasena"].'</p>':""; ?>
					<?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
				</div>
				<div class="form-group col-sm-6">
					<label for="contrasena-confirm">Confirmar Contraseña</label>
					<input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
					<?php echo (isset($errores["contrasena_conf"]))?'<p style="color:red;">'.$errores["contrasena_conf"].'</p>':""; ?>
				</div>
			</div>
    <br><br>
    <input type="submit" name="registro" value="REGISTRAR">
  </form>

</div>






		<!-- footer -->
		<footer class="main-footer">
			<section class="redes">
        <ul>
          <li>  <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>

          </li>
        </ul>
      </section>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </div></body>
</html>
