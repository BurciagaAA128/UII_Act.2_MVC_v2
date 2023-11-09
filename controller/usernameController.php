<?php
    class bebidaController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new bebidaModel();
        }
        public function guardar($nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto = null) {
            $id = $this->model->insertar($nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto);
        
            if ($id !== false) {
                header("Location:show.php?id=" . $id);
            } else {
                header("Location:create.php");
            }
        }        
        
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto = null) {
            $registroExistente = $this->show($id);
        
            if ($registroExistente) {
                if ($foto === null) {
                    // No se proporciona una nueva imagen, mantén la imagen existente
                    $foto = $registroExistente['foto'];
                }
        
                $this->model->update($id, $nombre, $precio, $tamano, $descripcion, $tipo, $calorias, $foto);
                header("Location:show.php?id=" . $id);
            } else {
                header("Location:index.php");
            }
        }
        
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>