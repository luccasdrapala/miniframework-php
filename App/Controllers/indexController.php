<?php

namespace App\Controllers;

//recursos miniframework
use MF\Controller\Action;
use MF\Model\Container;

//models
use App\Models\produto;
use App\Models\info;

class IndexController extends Action{

    public function index() {
        // $this->view->dados = array('sofa', 'Cadeira', 'Cama');

        // instancia de conexao do PDO
        // instanciar o modelo paa alteralo
        $produto = Container::getModel('Produto');

        $this->view->dados = $produto->getProdutos();

        $this->render('index', 'layout1');
    }

    public function sobreNos() {
        // $this->view->dados = array('notebook', 'forabozo', 'fazoL');

        // instancia de conexao do PDO
        // instanciar o modelo paa alteralo
        $info = Container::getModel('info');

        $this->view->dados = $info->getInfo();

        $this->render('sobreNos', 'layout2');
    }
}
?>