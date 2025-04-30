<?php

class DB {

    private $db;

    public function __construct() {
        $this->db = new PDO('sqlite:database.sqlite');
    }


    public function filmes($pesquisa = null) {
        $prepare = $this->db->prepare("SELECT * FROM filmes WHERE titulo LIKE :pesquisa");
        $prepare->bindValue(':pesquisa', "%$pesquisa%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, Filme::class);
        $prepare->execute();

        return $prepare->fetchAll();
    }

    public function filme($id) {
        $prepare = $this->db->prepare("SELECT * FROM filmes WHERE id = :id");
        $prepare->bindValue(':id', $id);
        $prepare->setFetchMode(PDO::FETCH_CLASS, Filme::class);
        $prepare->execute();

        return $prepare->fetch();
    }
}

?>