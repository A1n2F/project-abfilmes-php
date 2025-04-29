<?php

class DB {
    public function filmes() {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query("SELECT * FROM filmes");

        return $query->fetchAll();
    }
}

?>