<?php
include("../php/conexion.php");
$con = conectar();
//ini_set('error_reporting', 0);
include("../admin/menuAdmin.php");
?>
<div class="container">
    <br>
    <div class="row">
        <?php
        $query = mysqli_query($con, "SELECT * FROM `cursos`");

        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div>
                    <div style="box-shadow:2px 2px 2px 2px black;">
                        <img src="<?php echo $row['portada']; ?>" class="w-100"><br>
                        <div class="container">
                            <center>
                                <h4><?php echo $row['nombreCurso']; ?></h4>
                                <p><?php echo $row['descripcionCurso']; ?></p>
                            </center>
                            <form action="<?php echo $row['linkCurso']; ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id_curso']; ?>">
                                <input type="hidden" name="nombre" value="<?php echo $row['nombreCurso']; ?>">
                                <input type="hidden" name="descripcion" value="<?php echo $row['descripcionCurso']; ?>">
                                <input type="hidden" name="portada" value="<?php echo $row['portada']; ?>">
                                <center><input style="margin: 0px 0px 10px 0px;" type="submit" class="btn btn-primary" name="ingresar"></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
include('../admin/footer.php');
?>