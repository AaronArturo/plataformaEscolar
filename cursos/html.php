<?php
include('../admin/menuAdmin.php');
include('../php/conexion.php');
$con = conectar();
if($_POST){

    $name = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $id = $_POST['id'];
    $portada = $_POST['portada'];
?>
<div id="carouselExampleSlidesOnly" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo$portada ?>" class="d-block w-100">
    </div>
  </div>
</div>
<center><h1>Bienvenido al curso <?php echo $name; ?></h1></center>
<?php
}
include('../admin/footer.php');
?>