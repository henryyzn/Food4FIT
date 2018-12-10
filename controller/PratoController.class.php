<?php
    require_once("Controller.class.php");
    require_once(__DIR__ . "/../model/Prato.class.php");
    require_once(__DIR__ . "/../model/dao/PratoDAO.class.php");
    require_once(__DIR__ . "/../model/FotoPrato.class.php");
    require_once(__DIR__ . "/../model/dao/FotoPratoDAO.class.php");

    class PratoController extends Controller {
        public function init() {
            $this->criarRota("POST", "prato/inserir", "inserir");
            $this->criarRota("GET", "prato/select/{idPrato}", "listar");
            $this->criarRota("GET", "prato/excluir/{id}", "excluirDado");
            $this->criarRota("GET", "prato/ativar/{id}", "ativarItem");
            $this->criarRota("POST", "prato/editar/{id}", "editarInformacao");
            $this->criarRota("GET", "prato/selecionar/{id}", "selecionar");
        }

        public function inserir() {
            $prato = new Prato($this->dados);
            PratoDAO::inserir($prato);
        }

        public static function listar() {
            return PratoDAO::listar();
        }

        public function excluirDado($id){
            PratoDAO::excluir($id);
        }

        public function ativarItem($id){
            PratoDAO::ativar($id);
        }

        public function editarInformacao($id){
            $informacao = new Prato($this->dados);
            PratoDAO::editar($id, $informacao);
        }

        public function selecionar($id){
            //Chamando a LojaDAO
            $prato = PratoDAO::selecionar($id);
            //Enviando resultado para Tela
            $this->api->enviarResultado($prato);
        }

    }
?>
