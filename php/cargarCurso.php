<?php
include("conexion.php");
$conect = conectar();
session_start();
//ini_set("error_reporting", 0);
if ($_POST) {
    $nombre = $_POST['nombreCurso'];
    $descrip = $_POST['descripcionCurso'];
    $link = $_POST['linkCurso'];
    $foto = $_FILES['portada'];
    $directorioDestino = "../img/cursos";

    $tmp_name = $foto['tmp_name'];
    $img_file = $foto['name'];
    $img_type = $foto['type'];
    //si es una imagen entra 
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg") || strpos($img_type, "png")))) {
            echo "estoy aqui";
        //si se cumple el tipo de archivo se realiza la operacion
        $destino = $directorioDestino . '/' . $img_file;
        mysqli_query($conect, "INSERT INTO `cursos` (`id_curso`, `nombreCurso`, `descripcionCurso`, `portada`, `linkCurso`) VALUES (NULL, '$nombre', '$descrip', '$destino', '$link');");
        (move_uploaded_file($tmp_name, $destino));
        header("Location: ../public/cursos.php");
    }
    ?>
    <script>
        alert("tipo de archivo no compatible")
    </script>
    <?php
    header("Refresh: 1; url= ../public/crearcurso.php");
}