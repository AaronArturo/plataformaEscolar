<?php
include('../admin/menuAdmin.php');
include('../php/conexion.php');
$con = conectar();
?>
<div class="container">
    <div class="row">
        <h1>Crear curso</h1>
        <form action="../php/cargarCurso.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Seleccione uno de los curso existentes</label>
            <select class="form-select" aria-label="Default select example" name="linkCurso">
                    <option selected>...</option>
                    <option value="../cursos/html.php">HTML</option>
                    <option value="../cursos/css.php">CSS</option>
                    <option value="../cursos/javascript.php">JavaScript</option>
                    <option value="../cursos/cursophp.php">PHP</option>
                    <option value="../cursos/servidores.php">Servidores locales</option>
                    <option value="../cursos/datos.php">Base de datos</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre del curso</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Curso HTML" name="nombreCurso">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripcion de curso</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion del curso" name="descripcionCurso"></textarea><br>
            </div>
            <div class="mb-3">
            <input type="file" name="portada" style="background-color: rgb(46, 138, 153); color: white; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
            </div>
            <button type="submit" class="btn btn-info" name="curso">Crear curso</button>
        </form>
    </div>
</div>
<?php
include('../admin/footer.php');
?>