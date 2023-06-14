<?php
session_start();
include("../php/conexion.php");
$con = conectar();
ini_set('error_reporting', 0);
if (!isset($_SESSION['correo'])) {
  header("Location: login.php");
}

include("../admin/menuAdmin.php");
?>
<div class="row">
  <!-- barra izquierda inicio-->
  <div class="col-lg-2 col-md-3 col-sm-12" style="background-color: rgb(243, 232, 255);">
    <div style="margin: 2rem;">
      <center>
        <img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px" src="<?php echo $_SESSION['foto']; ?>" height="125px" style /><br>
      </center>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar foto de perfil</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-2">
                    <img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px" src="<?php echo $_SESSION['foto']; ?>" class="w-100" />
                  </div>
                  <div class="col-10">
                    <form action="../php/actualizarFoto.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                      <input type="file" name="fotoNueva" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Actualizar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <center><!-- Button trigger modal -->
      <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Actualizar foto
      </button>
    </center>
  </div>
  <!-- barra izquierda fin-->

  <!--body inicio-->
  <div class="col-lg-7 col-md-9 col-sm-12">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/baner/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/baner/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/baner/3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!--body inicio fin-->
  <!--footer-->
  <div class="col-lg-3 col-md-12 col-sm-12" style="background-color: rgb(243, 232, 255);">
    <center>
      <div style="margin: 1rem 0rem 1rem 0rem; font-size: 22px;">Notificaciones</div>
    </center>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="../img/icon/comentario-positivo.png" height="30px">
        </div>
        <div class="col-3">
          <img src="../img/avatar/usuarios.png" height="30px">
        </div>
        <div class="col-3">
          <img src="../img/icon/campana.png" height="30px">
        </div>
        <div class="col-3"></div>
      </div>
    </div><br>
    <div class="row">
      <div class="container" style="padding: 0px 10px 0px 10px;">
        <?php
        $rol = $_SESSION['rol'];
        if ($rol == 'administrador') {
        ?>
          <div class="col-lg-12 col md-12 col-sm-12 card" style="padding: 2px 7px 2px 7px; background-color: rgb(187, 151, 221);">
            <h5>Ultimos Registrados</h5>
            <ul style="list-style-type: none;">
              <div class="row">
                <?php
                $totalR = mysqli_query($con, "SELECT foto, nombres FROM usuarios order by id desc limit 6");
                while ($reg = mysqli_fetch_array($totalR)) {
                ?>
                  <div class="col-6">
                    <li style="display:inline; padding-right:3px; text-align: center;">
                      <img style="border: 3px rgb(6, 141, 169) solid; border-radius: 10px;" src="<?php echo $reg['foto']; ?>" height="70px"><br>
                      <a style="text-decoration: none; color: black;" class="user-list-name" href="#"><?php echo $reg['nombres']; ?></a><br>
                    </li>
                  </div>
                <?php
                }
                ?>
            </ul>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!--fin footer-->
<?php
include("../admin/footer.php");
?>