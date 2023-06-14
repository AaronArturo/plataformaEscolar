<?php
include("../php/conexion.php");
$con = conectar();
include("../admin/menuAdmin.php");
ini_set('error_reporting', 0);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div><br>
                <center>
                    <h2>Agregar nuevos maestros</h2>
                    <form action="" method="post" enctype="multipart/form-data" style="padding: 15px;">
                        <input type="text" value="<?php echo $_POST['nombres'] ?>" required name="nombres" placeholder="nombre´s" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="text" value="<?php echo $_POST['apellidoPat'] ?>" required name="apellidoPat" placeholder="primer apellido" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="text" required value="<?php echo $_POST['apellidoMat'] ?>" name="apellidoMat" placeholder="segundo apellido" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="text" required value="<?php echo $_POST['correo'] ?>" name="correo" placeholder="correo" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="password" required name="password" placeholder="contraseña" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="password" required name="verifiPass" placeholder="verificar contraseña" style="width: 17rem; margin: 5px;" class="form-control">
                        <input type="hidden" required name="rol" value="docente">
                        <input type="hidden" required name="foto" value="../img/avatar/inicio.jpg"><br>
                        <input type="submit" class="btn btn-outline-primary" value="registrarse" name="registrar">
                    </form>
                    <?php
                    if (isset($_POST['registrar'])) {
                        $name = $_POST["nombres"];
                        $apellidoAluP = $_POST["apellidoPat"];
                        $apellidoAluM = $_POST["apellidoMat"];
                        $correoAlu  = $_POST["correo"];
                        $passwordAlu = $_POST["password"];
                        $verifiPas = $_POST["verifiPass"];
                        $rolAlu = $_POST["rol"];
                        $fotoAlu = $_POST["foto"];

                        $comprobaremail = mysqli_num_rows(mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correoAlu';"));

                        if ($comprobaremail >= 1) {
                    ?><center>
                                <p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Correo Existente</p>
                            </center><?php
                                    } else {
                                        if ($passwordAlu != $verifiPas) {
                                        ?><center>
                                    <p style="background-color: rgb(206, 0, 0); color:white; padding: 1rem 1rem; margin: 5px 10px; border-radius: 5px;">Las contraseñas no coinciden</p>
                                </center><?php
                                        } elseif ($passwordAlu == $verifiPas) {

                                            $insert = mysqli_query($con, "INSERT INTO `usuarios` (`id`, `nombres`, `apellidoPat`, `apellidoMat`, `correo`, `password`, `rol`, `foto`) VALUES (NULL, '$name', '$apellidoAluP', '$apellidoAluM', '$correoAlu', '$passwordAlu', '$rolAlu', '$fotoAlu');");

                                            header("Location: cargando.php");
                                        }
                                    }
                                }
                                            ?>
                </center>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12"><br>
            <ul style="list-style-type: none;">
                <?php
                $totalR = mysqli_query($con, "SELECT * FROM `usuarios` WHERE rol LIKE 'docente' order by id desc limit 6");
                while ($reg = mysqli_fetch_array($totalR)) {
                ?>
                    <li style="display:inline;">
                        <div style="border: 2px black solid; padding: 5px 0px 0px 0px;">
                            <p><img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px;" src="<?php echo $reg['foto']; ?>" height="70px">
                                <?php echo ucwords($reg['nombres']) . " " . $reg['cooreo'] . " " ?><b><?php echo $reg['rol']; ?></b></p>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php
include('../admin/footer.php')
?>