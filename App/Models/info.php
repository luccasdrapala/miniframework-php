<?php

namespace App\Models;

class info {

    protected $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

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