<?php

class DB {

    private $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }


    public function filmes($pesquisa = null) {
        $prepare = $this->db->prepare("SELECT * FROM filmes WHERE titulo LIKE :pesquisa");
        $prepare->bindValue('pesquisa', "%$pesquisa%");
        $prepare->execute();

        $items = $prepare->fetchAll();

        return array_map(fn($item) => Filme::make($item), $items);
        
    }

    public function filme($id) {

        $sql = "SELECT * FROM filmes";            
        
        $sql .= " WHERE id = " . $id;
        
        $query = $this->db->query($sql);

        $items = $query->fetchAll();

        return array_map(fn($item) => Filme::make($item), $items)[0];
    }
}

?>