<?php

class DB {

    private $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }


    public function filmes() {
        $query = $this->db->query("SELECT * FROM filmes");

        $items = $query->fetchAll();
        $retorno = [];

        return array_map(fn($item) => Filme::make($item), $items);
        
    }

    public function filme($id) {

        $sql = "SELECT * FROM filmes";            
        
        $sql .= " WHERE id = " . $id;
        
        $query = $this->db->query($sql);

        $items = $query->fetchAll();
        $retorno = [];

        return array_map(fn($item) => Filme::make($item), $items)[0];
    }
}

?>