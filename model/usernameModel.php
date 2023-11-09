<?php
    class bebidaModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function insertar($nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto) {
            $stament = $this->PDO->prepare("INSERT INTO tbl_bebida (nombre, precio, tamano, descripcion, tipo, calorias, foto) VALUES (:nombre, :precio, :tamano, :descripcion, :tipo, :calorias, :foto)");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":precio", $precio);
            $stament->bindParam(":tamano", $tamano);
            $stament->bindParam(":descripcion", $descripcion);
            $stament->bindParam(":tipo", $tipo);
            $stament->bindParam(":calorias", $calorias);
            $stament->bindParam(":foto", $foto, PDO::PARAM_LOB);
        
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }
        
        

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_bebida where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_bebida");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto) {
            $stament = $this->PDO->prepare("UPDATE tbl_bebida SET nombre = :nombre, precio = :precio, tamano = :tamano, descripcion = :descripcion, tipo = :tipo, calorias = :calorias, foto = :foto WHERE id = :id");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":precio", $precio);
            $stament->bindParam(":tamano", $tamano);
            $stament->bindParam(":descripcion", $descripcion);
            $stament->bindParam(":tipo", $tipo);
            $stament->bindParam(":calorias", $calorias);
            $stament->bindParam(":foto", $foto, PDO::PARAM_LOB);
            $stament->bindParam(":id", $id);
        
            $stament->execute();
        }
        
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_bebida WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>