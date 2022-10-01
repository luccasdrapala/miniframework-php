<?php

namespace App\Models;
use MF\Model\Model;

class Produto extends Model{

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