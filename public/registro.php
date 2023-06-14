<?php
include("../php/conexion.php");
$con = conectar();
session_start();
ini_set('error_reporting', 0);
if(isset($_SESSION['correo'])){
  header("Location: perfil.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body style="background-image: url('../img/registro/fondo_login_1.jpeg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card" style="border-radius: 10px; box-shadow: 3px 3px 3px 3px rgb(0, 0, 0, 0.6); margin: 8rem 0rem 0rem 2rem; background-color: rgb(255, 255, 255, 0.3);">
                <center>
                <form action="" method="post" enctype="multipart/form-data" style="padding: 15px;">
                    <input type="text" value="<?php echo $_POST['nombres'] ?>" required name="nombres" placeholder="nombre´s" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="text" value="<?php echo $_POST['apellidoPat'] ?>" required name="apellidoPat" placeholder="primer apellido" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="text" required value="<?php echo $_POST['apellidoMat'] ?>" name="apellidoMat" placeholder="segundo apellido" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="text" required value="<?php echo $_POST['correo'] ?>" name="correo" placeholder="correo" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="password" required name="password" placeholder="contraseña" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="password" required name="verifiPass" placeholder="verificar contraseña" style="width: 17rem; margin: 5px;" class="form-control">
                    <input type="hidden" required name="rol" value="alumno">
                    <input type="hidden" required name="foto" value="../img/avatar/inicio.jpg">
                    <input type="submit" class="btn btn-outline-primary" value="registrarse" name="registrar">
                </form>
                <?php
                if(isset($_POST['registrar'])){
                    $name = $_POST["nombres"];
                    $apellidoAluP = $_POST["apellidoPat"];
                    $apellidoAluM = $_POST["apellidoMat"];
                    $correoAlu  = $_POST["correo"];
                    $passwordAlu = $_POST["password"];
                    $verifiPas = $_POST["verifiPass"];
                    $rolAlu = $_POST["rol"];
                    $fotoAlu = $_POST["foto"];

                    $comprobaremail = mysqli_num_rows(mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correoAlu';"));

                    if($comprobaremail >= 1){
                        ?><center><p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Correo Existente</p></center><?php
                    }else{
                        if($passwordAlu != $verifiPas){
                            ?><center><p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Las contraseñas no coinciden</p></center><?php
                        }elseif($passwordAlu == $verifiPas){

                            $insert = mysqli_query($con, "INSERT INTO `usuarios` (`id`, `nombres`, `apellidoPat`, `apellidoMat`, `correo`, `password`, `rol`, `foto`) VALUES (NULL, '$name', '$apellidoAluP', '$apellidoAluM', '$correoAlu', '$passwordAlu', '$rolAlu', '$fotoAlu');");

                            if($insert){
                                ?><center><p style="background-color: rgb(0, 206, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Se realizo el registro con exito</p></center><?php
                                
                                header("Refresh: 2; url= login.php");
                            }
                        }
                        
                    }
                }
                ?>
                
                </center>  
                <a style="padding: 4px 5px" href="login.php"> ya tengo una cuenta</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">
            <div style="margin: 20px 0px 0px 300px;">
            <form action="../index.php">
            <button type="submit" class="btn btn-dark">Inicio</button>
            </form>
            </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
?>