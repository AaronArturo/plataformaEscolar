<?php
session_start();
include("../php/conexion.php");
$con = conectar();
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
                    <form action="" method="post">
                    <input type="text" required name="correo" placeholder="Correo" style="width: 17rem; margin: 5px 0px 0px 25px;" class="form-control" pattern="[A-Za-z_-@0-9]{1,30}">
                    <input type="password" required name="password" placeholder="contraseña" style="width: 17rem; margin: 5px 0px 0px 25px;" class="form-control" pattern="[A-Za-z._-0-9]{1,20}"><br>
                    <center><input type="submit" class="btn btn-primary" value="ingresar" name="ingresar"></center>
                    </form>
                    <?php
                        if(isset($_POST['ingresar'])){
                            $correo = $_POST['correo'];
                            $pass = $_POST['password'];

                        $query = mysqli_query($con, "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$pass';");
                        $contar = mysqli_num_rows($query);
                        if($contar  == 1){
                            
                            while($row = mysqli_fetch_array($query)){
                                
                                if($correo = $row['correo'] && $pass = $row['password']){
                                    
                                    $_SESSION['correo'] = $row['correo'];
                                    $_SESSION['id'] = $row['id'];
                                    $_SESSION['nombres'] = $row['nombres'];
                                    $_SESSION['foto'] = $row['foto'];
                                    $_SESSION['rol'] = $row['rol'];
                                    $_SESSION['correo'] = $row['correo'];
                                    $_SESSION['apellidoPat'] = $row['apellidoPat'];
                                    $_SESSION['apellidoMat'] = $row['apellidoMat'];

                                    header("Location: perfil.php");
                                }
                            }
                        }else{
                            ?><center><p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Usuario inexistente, verifique sus datos ingresados</p></center><?php
                        }
                        }
                    ?>
                    <a style="padding: 4px 5px" href="registro.php">Registrarse</a>
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