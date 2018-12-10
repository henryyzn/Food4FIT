<?php
    require_once("Model.class.php");

    class Prato extends Model {
        protected $id;
        protected $idCategoria;
        protected $titulo;
        protected $descricao;
        protected $resumo;
        protected $preco;
        protected $ativo;
        protected $idUsuario;
        protected $foto;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getIdCategoria(){
            return $this->idCategoria;
        }

        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getResumo(){
            return $this->resumo;
        }

        public function setResumo($resumo){
            $this->resumo = $resumo;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getAtivo(){
            return $this->ativo;
        }

        public function setAtivo($ativo){
            $this->ativo = $ativo;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getFoto(){
            return $this->foto;
        }

        public function setFoto($foto){
            $this->foto = $foto;
        }
    }
?>
