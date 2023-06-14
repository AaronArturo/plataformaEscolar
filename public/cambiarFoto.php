<?php
include("../php/conexion.php");
$conect = conectar();
include("../admin/menuAlumno.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Cambiar foto de perfil</h3>
                <?php
                    session_start(); $foto = $_SESSION["id"];
                    $id = $_SESSION["id"];
                    $query = mysqli_query($conect, "SELECT * FROM alumnos WHERE id = $id;");
                    $valores = mysqli_fetch_array($query);
                    $nombre = $valores["nombreAlu"];
                    $id = $valores["id"];
                    $foto = $valores["fotoAlu"];
                ?>
                <img src="<?php echo $foto; ?>" class="w-100" style="border: 2px black solid;">
                <br><br>
                <form action="../php/actualizarFoto.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="file" name="nFoto"><br><br>
                    <button type="sumbit" class="btn btn-primary">actualizar</button>
                </form>
            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </div>
<?php
include("../admin/footer.php");
?>