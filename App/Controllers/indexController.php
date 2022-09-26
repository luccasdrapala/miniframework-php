<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index() {
        $this->view->dados = array('sofa', 'Cadeira', 'Cama');
        $this->render('index');
    }

    public function sobreNos() {
        $this->view->dados = array('notebook', 'forabozo', 'fazoL');
        $this->render('sobreNos');
    }
}
?>