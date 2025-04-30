<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';

$filmes = (new DB)->query(
    query: "SELECT * FROM filmes WHERE titulo LIKE :filtro", 
    class: Filme::class, 
    params: ['filtro' => "%$pesquisar%"])
    ->fetchAll();

view('index', [ 'filmes' => $filmes ]);

?>