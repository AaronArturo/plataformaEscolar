<?php
include('../admin/menuAdmin.php');
include('../php/conexion.php');
ini_set('error_reporting', 0);
$con = conectar();
?><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h3>Datos del alumno</h3>
            <?php
            $query = mysqli_query($con, "SELECT * FROM `usuarios` WHERE `rol` LIKE 'alumno'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div style="border: 1px black solid;">
                    <div class="row">
                        <div class="col-7">
                            <b>Foto perfil : </b><img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px" src="<?php echo $row['foto'] . " " ?>" height="70px"><br><b>Nombre : </b><?php echo $row['nombres'] . " " . $row['apellidoPat'] . " " . $row['apellidoPat'] . " " . $row['apellidoMat'] . " " ?><br><b>correo : </b><?php echo $row['correo']; ?><br>
                            <b>contraseña : </b><?php echo $row['password']; ?><br>
                        </div>
                        <div class="col-5">
                            <div style="padding: 55px 0px 0px 0px;">
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-success" name="actualizar">actualizar</button>
                                    <button type="submit" class="btn btn-danger" name="Eliminar">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <center>Aqui va ir un crud</center>
        </div>
    </div>
</div>
<?php
include('../admin/footer.php');
?>