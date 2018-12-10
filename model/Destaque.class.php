<?php
    require_once("Model.class.php");

    class Destaque extends Model {
        protected $id;
        protected $idPrato;
        protected $ativo = true;
        protected $foto;
        protected $titulo;
        protected $resumo;
        protected $descricao;
        protected $preco;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getIdPrato() {
            return $this->idPrato;
        }

        public function setIdPrato($idPrato) {
            $this->idPrato = $idPrato;
        }

        public function isAtivo() {
            return $this->ativo;
        }

        public function setAtivo($ativo) {
            $this->ativo = $ativo;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getResumo() {
            return $this->resumo;
        }

        public function setResumo($resumo) {
            $this->resumo = $resumo;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }
    }
?>
