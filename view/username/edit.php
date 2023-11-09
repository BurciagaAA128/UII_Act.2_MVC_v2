<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new bebidaController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php" method="post" enctype="multipart/form-data">
    <h2>Modificando Registro</h2>
    
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="number" name="precio" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tamaño</label>
        <div class="col-sm-10">
            <input type="text" name="tamano" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Tipo</label>
        <div class="col-sm-10">
            <input type="text" name="tipo" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Calorias</label>
        <div class="col-sm-10">
            <input type="number" name="calorias" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">foto</label>
    <div class="col-sm-10">
        <img src="data:image/jpeg;base64,<?= base64_encode($user[7]) ?>" alt="Imagen" style="max-width: 100px; max-height: 100px;" />
        <input type="file" name="foto" class="form-control" id="inputPassword">
    </div>
</div>


    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>