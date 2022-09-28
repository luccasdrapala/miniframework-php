<?php

namespace App\Models;

class Produto {

    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function getProdutos() {
        // return array('fazol', 'lulalivre');

        $query = 'select id, descricao, preco from tb_produtos';

        $prepare = $this->db->prepare($query);
        $prepare->execute();
        $ret = $prepare->fetchAll();

        return $ret;
       // return $this->db->query($query)->fetchAll(); // retornando um array
    }
}

?>