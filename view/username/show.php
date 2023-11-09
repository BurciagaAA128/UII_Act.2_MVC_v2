<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new bebidaController();
    $date = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
        <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Tipo</th>
            <th scope="col">Calorías</th>
            <th scope="col">Foto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"]?></td>
            <td scope="col"><?= $date["nombre"]?></td>
            <td scope="col"><?= $date["precio"]?></td>
            <td scope="col"><?= $date["tamano"]?></td>
            <td scope="col"><?= $date["descripcion"]?></td>
            <td scope="col"><?= $date["tipo"]?></td>
            <td scope="col"><?= $date["calorias"]?></td>
            <td scope="col"> <img src="data:image/jpeg;base64,<?= base64_encode($date["foto"]) ?>" alt="Imagen" width="100" height="100" /></td>
        </tr>
    </tbody>
</table>



<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>