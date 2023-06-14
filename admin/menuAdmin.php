<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: rgb(163, 26, 203); position:sticky; top: 0; width: 100%; z-index: 9999;" id="nav-fijo">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: white;"><?php echo ucwords($_SESSION['nombres']); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" name="boton">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: rgb(163, 26, 203); color: white">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px" src="<?php echo $_SESSION['foto']; ?>" height="45px"><?php echo $_SESSION['nombres']; ?></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <?php
                        $rol = $_SESSION['rol'];
                        if ($rol == 'administrador') {
                        ?>
                            <li class="nav-item" id="opcion-inicio">
                                <a class="nav-link active" aria-current="page" href="../public/perfil.php"><span><img src="../img/icon/hogar.png" width="50px"></span><b style="color: white;">Home</b></a>
                            </li>
                            <li class="nav-item" id="opcion-cursos">
                                <a class="nav-link active" aria-current="page" href="../public/cursos.php"><span><img src="../img/icon/cursos.png" width="50px"></span><b style="color: white;">Cursos</b></a>
                            </li>
                            <li class="nav-item" id="opcion-comentarios">
                                <a class="nav-link active" aria-current="page" href="../public/comentarios.php"><span><img src="../img/icon/comentario-positivo.png" width="50px"></span><b style="color: white;">Comentarios</b></a>
                            </li>
                            <li class="nav-item" id="opcion-cursos">
                                <a class="nav-link active" aria-current="page" href="../public/crearcurso.php"><span><img src="../img/icon/cursos.png" width="50px"></span><b style="color: white;">Crear cursos</b></a>
                            </li>
                            <li class="nav-item" id="opcion-alumnos">
                                <a class="nav-link active" aria-current="page" href="../public/alumnos.php"><span><img src="../img/icon/colegial.png" width="50px"></span><b style="color: white;">Alumnos</b></a>
                            </li>
                            <li class="nav-item" id="opcion-maestros">
                                <a class="nav-link active" aria-current="page" href="../public/Mestros.php"><span><img src="../img/icon/maestro.png" width="50px"></span><b style="color: white;">Maestros</b></a>
                            </li>
                            <li class="nav-item" id="opcion-configuraciones">
                                <a class="nav-link active" aria-current="page" href="#"><span><img src="../img/icon/configuraciones.png" width="50px"></span><b style="color: white;">Configuraciones</b></a>
                            </li>
                        <?php
                        }
                        if ($rol == 'docente') {
                        ?>
                            <li class="nav-item" id="opcion-inicio">
                                <a class="nav-link active" aria-current="page" href="../public/perfil.php"><span><img src="../img/icon/hogar.png" width="50px"></span><b style="color: white;">Home</b></a>
                            </li>
                            <li class="nav-item" id="opcion-cursos">
                                <a class="nav-link active" aria-current="page" href="../public/cursos.php"><span><img src="../img/icon/cursos.png" width="50px"></span><b style="color: white;">Cursos</b></a>
                            </li>
                            <li class="nav-item" id="opcion-comentarios">
                                <a class="nav-link active" aria-current="page" href="../public/comentarios.php"><span><img src="../img/icon/comentario-positivo.png" width="50px"></span><b style="color: white;">Comentarios</b></a>
                            </li>
                            <li class="nav-item" id="opcion-cursos">
                                <a class="nav-link active" aria-current="page" href="../public/crearcurso.php"><span><img src="../img/icon/cursos.png" width="50px"></span><b style="color: white;">Crear cursos</b></a>
                            </li>
                            <li class="nav-item" id="opcion-alumnos">
                                <a class="nav-link active" aria-current="page" href="../public/alumnos.php"><span><img src="../img/icon/colegial.png" width="50px"></span><b style="color: white;">Alumnos</b></a>
                            </li>
                        <?php
                        }
                        if ($rol == 'alumno') {
                        ?>
                            <li class="nav-item" id="opcion-inicio">
                                <a class="nav-link active" aria-current="page" href="../public/perfil.php"><span><img src="../img/icon/hogar.png" width="50px"></span><b style="color: white;">Home</b></a>
                            </li>
                            <li class="nav-item" id="opcion-cursos">
                                <a class="nav-link active" aria-current="page" href="../public/cursos.php"><span><img src="../img/icon/cursos.png" width="50px"></span><b style="color: white;">Cursos</b></a>
                            </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item" id="opcion-salir">
                            <a class="nav-link active" aria-current="page" href="../php/logout.php"><span><img src="../img/icon/salir.png" width="50px"></span><b style="color: white;">Salir</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>