<?php

class DB {
    public function filmes() {
        $db = new PDO('sqlite:database.sqlite');
        $query = $db->query("SELECT * FROM filmes");

        $items = $query->fetchAll();
        $retorno = [];

        foreach ($items as $item) {
            $filme = new Filme;
            $filme->id = $item['id'];
            $filme->titulo = $item['titulo'];
            $filme->genero = $item['genero'];
            $filme->ano = $item['ano'];

            $retorno []= $filme;
        }
        
        return $retorno;
        
    }
}

?>