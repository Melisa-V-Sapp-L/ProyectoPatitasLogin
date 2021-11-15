<!DOCTYPE html>
<html>
<head>
	<title>Login de usuario</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <!--Aquí empieza el slice/carrusel-->

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/images (7).jpg" id="carrusel" class="d-block w-100" alt="carousel1">
      <div class="carousel-caption d-none d-md-block">
        <h3>¡Adopción responsable!</h3>
        <p>Adopta un mascota, un amigo, un nuevo miembro de tu familia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/images (13).jpg" id="carrusel" class="d-block w-100" alt="carousel2">
      <div class="carousel-caption d-none d-md-block">
        <h3>¡Adopción responsable!</h3>
        <p>Adopta un mascota, un amigo, un nuevo miembro de tu familia.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/images (10).jpg" id="carrusel" class="d-block w-100" alt="carousel3">
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

  </div>

  <!--Aquí termina el slice/carrusel-->


  <!--Aquí empieza el menu-->

  <nav id="nav" class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1">
      <img id="logo" class="logos" src="image/patita6.jpg">
      Patitas
    </a>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="navbar-brand" href="Nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="Adopciones.php">Adopciones</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="Donaciones.php">Donaciones</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="Protectoras.php">Protectoras</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="Veterinarias.php">Veterinarias</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="Tiendas.php">Tiendas</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="login.php">Perfil</a>
      </li>
    </ul>
  </div>
</nav>

<!--Aquí termina el menu-->


<!--Aquí empieza el formulario-->
	<form method="post" class="formA">
		<h1>Bienvenido</h1>
		<h2>Ingresa tus datos para acceder a tu perfil.</h2>
		<input type="email" name="email" placeholder="Tu email">
		<input type="password" name="contraseña" placeholder="Tu contraseña">
		
		<input type="submit" name="entrar" value="Entrar" class="btn btn-outline-dark">
		
    <a href="registro.php" class="btn btn-outline-dark" role="button" aria-disabled="true">Crear cuenta</a>
    <a href="recuperar.php" class="btn btn-outline-dark" role="button" aria-disabled="true">Olvidé mi contraseña</a>

	</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>