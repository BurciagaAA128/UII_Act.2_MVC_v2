<?php
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
$obj = new bebidaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $tamano = $_POST['tamano'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $calorias = $_POST['calorias'];

    if ($_FILES['foto']['tmp_name']) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    } else {
        $foto = null;
    }

    $obj->update($id, $nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto);
}
?>
