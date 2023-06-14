<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-image: url(../img/login/fondo_login_1.jpeg);">
<nav class="navbar navbar-expand-lg navbar-light color-menu" style="position:sticky; top: 0; width: 100%; z-index: 9999;">
    <div class="container-fluid">
      <a href="../index.php" style="text-decoration: none;">
        <h1 class="inicio" style="color: white;">Colegio SR</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0 0 0 80px;">
          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Principiantes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Programacion</a></li>
              <li><a class="dropdown-item" href="#">Base de datos</a></li>
              <li><a class="dropdown-item" href="#">Redes</a></li>
              <li><a class="dropdown-item" href="#">Diseño</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tienda
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu Link">
              <li><a class="dropdown-item" href="#">Software</a></li>
              <li><a class="dropdown-item" href="#">Cursos</a></li>
              <li><a class="dropdown-item" href="#">Talleres</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Servidores locales</a></li>
              <li><a class="dropdown-item" href="#">Gestor de estudiantes</a></li>
              <li><a class="dropdown-item" href="#">Gestor de cobro</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <div class="row">
            <div class="col-7">
              <div id="boton-registro">
                <a href="iniciarSesion.php" style="text-decoration: none; color:white;">Iniciar sesion</a>
              </div>
            </div>
            <div class="col-5">
              <div id="boton-registro">
                <a href="rAlumno.php" style="text-decoration: none; color:white;">Registro</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="targeta">
                    <div class="row">
                        <form action="../php/registroAlu.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nombre´s" aria-label="Nombre´s" name="nombreAlu" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno" name="apellidoPAlu" required>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno" name="apellidoMAlu" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="alias o usuario" aria-label="Alias o usuario" name="nombreUAlu" required>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Correo" aria-label="Correo" name="correoAlu" required>
                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" name="contraseñaAlu" required min="1" max="10">
                                </div>
                            </div>
                            <center><input type="submit" class="btn-form-is" value="Registrarse"></center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>