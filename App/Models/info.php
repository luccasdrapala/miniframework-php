<?php

namespace App\Models;
use MF\Model\Model;

class info extends Model{

    public function getInfo() {
        // return array('fazol', 'lulalivre');

        $query = 'select id, titulo, descricao from tb_info';

        $prepare = $this->db->prepare($query);
        $prepare->execute();
        $ret = $prepare->fetchAll(); //retorna um array

        return $ret;
       // return $this->db->query($query)->fetchAll(); // retornando um array
    }
}

?>