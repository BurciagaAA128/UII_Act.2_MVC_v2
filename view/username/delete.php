<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new bebidaController();
    $obj->delete($_GET['id']);

?>