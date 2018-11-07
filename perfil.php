<?php
session_start();

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    
     
<!DOCTYPE html>
<html>
	<head> <!--  -->
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- My CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<!-- Favicon -->
		<link rel="icon" href="images/ico.jpg" type="image/x-icon">
		<!-- titulo -->
		<title> QueenCandy | Home ~ </title>
		</head>

	<body>
	
	<div class="container">
		<!-- cabecera -->
		<header class="main-header">
		<img src="images/queen_candy.png" alt="logotipo" class="logo">
			<!-- barra de navegacion -->
			<nav class="main-nav">
				 <!-- <li><a href="#" class="toggle-nav"><span class="fa fa-bars"></span></a></li>-->
					<div class="menu">
						<ul>
					   <h1 style="color:white">¡Bienvenido <?php echo $_SESSION['nombre']; ?>!</h1>
				  	</ul>
					</div>
			</nav>
		</header>
		<!-- Carousel -->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	 	<div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="images/uno.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/dos.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/tres.jpg" alt="Third slide">
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="images/ocho.jpg" alt="Fourth slide">
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="images/nueve.jpg" alt="Fifth slide">
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="images/seis.jpg" alt="Fifth slide">
	    </div>
			<div class="carousel-item">
	      <img class="d-block w-100" src="images/siete.jpg" alt="Fifth slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
		</div>
		<!-- productos -->
	<h2 class="important_sections">Especialidades</h2>
		<!-- Cuerpo principal del sitio -->
		<section class="products"><!-- Contenedor de todos los productos -->
			<div class="row-1">
				<article class="producto"><!-- Contenedor de cada producto -->
					<img class="main-photo" src="images/product1.jpg" alt=""><br>
				<!--	<a class="more" href="#">ver más</a> -->
				</article>
				 <article class="producto">
					<img class="main-photo" src="images/product2.jpg" alt=""><br>
				<!--	<a class="more" href="#">ver más</a> -->
				</article>
				<article class="producto">
					<img class="main-photo" src="images/product3.jpg" alt=""><br>
				<!--	<a class="more" href="#">ver más</a>-->
				</article>
			</div>
 		<div class="row-2">
			<article class="producto">
				<img class="main-photo" src="images/product4.jpg" alt=""><br>
			<!--	<a class="more" href="#">ver más</a>-->
			</article>
			<article class="producto">
				<img class="main-photo" src="images/product5.jpg" alt=""><br>
			<!--	<a class="more" href="#">ver más</a>-->
			</article>
			<article class="producto">
				<img class="main-photo" src="images/product6.jpg" alt=""><br>
				<!--<a class="more" href="#">ver más</a>-->
			</article>
		</div>
		</section>

		<!-- footer -->
		<footer class="main-footer">
			<section class="redes">
        <ul>
          <li> 	<a href="#">¡Seguinos en nuestras redes sociales! <i class="fas fa-thumbs-up"></i></a><br>
						 		<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </section>
		</footer>
			<!-- bootsrap -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</div>
	</body>
</html>

   </body>
 </html>
