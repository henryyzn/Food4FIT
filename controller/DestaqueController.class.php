<?php
    require_once("Controller.class.php");
    require_once(__DIR__ . "/../model/Destaque.class.php");
    require_once(__DIR__ . "/../model/dao/DestaqueDAO.class.php");

    class DestaqueController extends Controller {
        public function init() {
            $this->criarRota("GET", "destaque", "listar");
            $this->criarRota("POST", "destaque", "inserir");
            $this->criarRota("GET", "destaque/{id}", "selecionarItem");
            $this->criarRota("PUT", "destaque/{id}", "atualizar");
            $this->criarRota("PUT", "destaque/{id}/ativar", "ativar");
            $this->criarRota("DELETE", "destaque/{id}", "excluir");
        }

        public function listar() {
            return DestaqueDAO::listar();
        }

        public function inserir() {
            session_start();
            $item = new Destaque($this->dados);
            $item->setIdFuncionario($_SESSION["funcionario"]->getId());
            $resultado = DestaqueDAO::inserir($item);
            if ($resultado) {
                $this->api->enviarResultado($resultado);
            } else {
                $this->api->enviarStatus(500, "Não foi possível inserir.");
            }
        }

        public function selecionarItem($id) {
            $item = DestaqueDAO::selecionar($id);
            if ($item) {
                $this->api->enviarResultado($item);
            } else {
                $this->api->enviarStatus(404, "Item não encontrado");
            }
        }

        public function atualizar($id) {
            $item = new Destaque($this->dados);
            if (DestaqueDAO::atualizar($id, $item)) {
                $this->api->enviarResultado($item);
            } else {
                $this->api->enviarStatus(404, "Item não encontrado");
            }
        }

        public function ativar($id) {
            if (DestaqueDAO::ativar($id)) {
               $this->api->enviarStatus(204);
            } else {
                $this->api->enviarStatus(404, "Item não encontrado");
            }
        }

        public function excluir($id) {
            if (DestaqueDAO::excluir($id)) {
                $this->api->enviarStatus(204);
            } else {
                $this->api->enviarStatus(404, "Item não encontrado");
            }
        }
    }
?>
