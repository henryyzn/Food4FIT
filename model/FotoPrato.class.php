<?php
    require_once("Model.class.php");

    class FotoPrato extends Model {
        protected $id;
        protected $idPrato;
        protected $foto;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getIdPrato(){
            return $this->idPrato;
        }

        public function setIdPrato($idPrato){
            $this->idPrato = $idPrato;
        }

        public function getFoto(){
            return $this->foto;
        }

        public function setFoto($foto){
            $this->foto = $foto;
        }

    }
?>
