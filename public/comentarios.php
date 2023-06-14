<?Php
include('../admin/menuAdmin.php');
include('../php/conexion.php');
$con = conectar();
?>
<center>
    <h1>Buzon de comentarios</h1>
</center>
<div class="container">
    <div class="row">
        <?php
        $query = mysqli_query($con, "SELECT * FROM comentarios;");
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12" style="border: 1px solid black;">
                <label><b>Nombre : </b></label>
                <a><?php echo $row['nombre'] . " "; ?></a><br>
                <label><b>Correo : </b></label>
                <a><?php echo $row['correo'] . " "; ?></a><br>
                <label><b>Telefono : </b></label>
                <a><?php echo $row['telefono'] . " "; ?></a><br>
                <label><b>Comentario : </b></label>
                <a><?php echo $row['comentario'] . " "; ?></a>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
include('../admin/footer.php');
?>