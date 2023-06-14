<?php
include("conexion.php");
$conect = conectar();
session_start();
//ini_set("error_reporting", 0);
if ($_POST) {
    $id = $_POST['id'];
    
    $foto = $_FILES['fotoNueva'];
    $directorioDestino = "../img/avatar";

    $tmp_name = $foto['tmp_name'];

    $img_file = $foto['name'];
    $img_type = $foto['type'];
    //si es una imagen entra 
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||
        strpos($img_type, "jpg") || strpos($img_type, "png")))) {
            echo "estoy aqui";
        //si se cumple el tipo de archivo se realiza la operacion
        $destino = $directorioDestino . '/' . $img_file;
        mysqli_query($conect, "UPDATE usuarios SET foto = '$destino' WHERE id = $id;");
        (move_uploaded_file($tmp_name, $destino));
        header("Location: ../public/perfil.php");
    }
    ?>
    <script>
        alert("tipo de archivo no compatible")
    </script>
    <?php
    header("Refresh: 1; url= ../public/perfil.php");
}
?>