<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!--Aquí empieza el menu-->

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/images (7).jpg" class="d-block w-100" alt="carousel1">
      <div class="carousel-caption d-none d-md-block">
        <h3>¡Adopción responsable!</h3>
        <p>Adopta un mascota, un amigo, un nuevo miembro de tu familia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/images (3).jpg" class="d-block w-100" alt="carousel2">
      <div class="carousel-caption d-none d-md-block">
        <h3>¡Adopción responsable!</h3>
        <p>Adopta un mascota, un amigo, un nuevo miembro de tu familia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/images (16).jpg" class="d-block w-100" alt="carousel3">
      <div class="carousel-caption d-none d-md-block">
        <h3>¡Adopción responsable!</h3>
        <p>Adopta un mascota, un amigo, un nuevo miembro de tu familia.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
   <!--Aquí termina el slice/carrusel-->

  <!--Aquí empieza el menu-->
  

    <div class="d-flex bd-highlight">
      <div class="p-2 flex-fill bd-highlight">Nosotros</div>
      <div class="p-2 flex-fill bd-highlight">Protectoras</div>
      <div class="p-2 flex-fill bd-highlight">Adoptar</div>
      <div class="p-2 flex-fill bd-highlight">Publicar una adopción</div>
      <div class="p-2 flex-fill bd-highlight">Veterinarias</div>
      <div class="p-2 flex-fill bd-highlight">Tiendas Online Asociadas</div>
      <div class="p-2 flex-fill bd-highlight">Donaciones</div>
      <div class="p-2 flex-fill bd-highlight">Información de interes</div>
      <div class="p-2 flex-fill bd-highlight">Perfil</div>
    </div>

  
  <!--Aquí termina el menu-->



  <!--Aquí empieza el formulario-->

	<form method="post" class="formA">
		<h1>Crear una nueva cuenta</h1>
		<h2>Completa con tus datos para la correcta creación de tu cuenta.</h2>
		<input type="text" name="nombre" placeholder="Tu nombre" required>
		<input type="text" name="apellido" placeholder="Tu apellido" required>
		<input type="email" name="email" placeholder="Tu email" required>
		<input type="password" name="contraseña" placeholder="Tu contraseña" required>
		
		<input type="submit" name="crear" value="Crear">
		
		<a href="login.php" class="btn btn-outline-dark" role="button" aria-disabled="true">Ya tengo una cuenta</a>
		<a href="recuperar.php" class="btn btn-outline-dark" role="button" aria-disabled="true">Olvidé mi contraseña</a>

	</form>
	<?php
	include("creaciondecuenta.php");

	?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
