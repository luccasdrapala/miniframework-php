<?php

// use PDO; use PDOException;
namespace App;

class Connection {

    public static function getDb() {

        try {

            $conn = new \PDO(
                'mysql:host=localhost;dbname;charset=utf8',
                'root',
                ''
            ); 

            return $conn;

        } catch(\PDOException $e) {
            //..tratar erro de alguma forma
            echo '# # # ERRO no PHP # # # ' . $e;
        }
    }

}
?>