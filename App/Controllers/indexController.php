<?php

namespace App\Controllers;

class IndexController {

    private $view;

    public function __construct() {
        $this->view = new \stdClass();
    } //metodo nativo do php para criar objetos estaticos

    public function index() {
        $this->view->dados = array('sofa', 'Cadeira', 'Cama');
        $this->render('index');
    }

    public function sobreNos() {
        $this->view->dados = array('notebook', 'forabozo', 'fazoL');
        $this->render('sobreNos');
    }

    public function render($view) {
        //echo(get_class($this)); retorna o local da classe "App/.../..."

        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);

        $classAtual = strtolower(str_replace('Controller', '', $classAtual)); 
        // usa o padrão do controller para setar a pasta que esta dentro da pasta Views
        
        //forma dinamico de acesso a determinada view
        require_once "../App/Views/". $classAtual ."/" .$view.".phtml";    
    }
}

?>