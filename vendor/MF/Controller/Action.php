<?php

namespace MF\Controller;

abstract class Action {

    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    } //metodo nativo do php para criar objetos estaticos

    protected function render($view, $layout) {
        $this->view->page = $view;

        if(file_exists("../App/Views/". $layout .".phtml")){
            require_once "../App/Views/". $layout .".phtml";
        } else {
            $this->content();
        }
    }

    protected function content() {
        //echo(get_class($this)); retorna o local da classe "App/.../..."

        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);

        $classAtual = strtolower(str_replace('Controller', '', $classAtual)); 
        // usa o padrão do controller para setar a pasta que esta dentro da pasta Views
        
        //forma dinamico de acesso a determinada view
        require_once "../App/Views/". $classAtual ."/" .$this->view->page.".phtml";
    }
}

?>