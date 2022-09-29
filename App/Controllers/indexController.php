<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\produto;
use App\Models\info;

class IndexController extends Action{

    public function index() {
        // $this->view->dados = array('sofa', 'Cadeira', 'Cama');

        // instancia de conexao do PDO
        $conn = Connection::getDb();

        // instanciar o modelo paa alteralo
        $produto = new Produto($conn);

        $this->view->dados = $produto->getProdutos();

        $this->render('index', 'layout1');
    }

    public function sobreNos() {
        // $this->view->dados = array('notebook', 'forabozo', 'fazoL');

        // instancia de conexao do PDO
        $conn = Connection::getDb();

        // instanciar o modelo paa alteralo
        $info = new info($conn);

        $this->view->dados = $info->getInfo();

        $this->render('sobreNos', 'layout2');
    }
}
?>