<?php

$id = $_REQUEST['id'];

$filme = $database->query(
    query: "SELECT * FROM filmes WHERE id = :id", 
    class: Filme::class, 
    params: ['id' => $_GET['id']])
    ->fetch();

$avaliacoes = $database->query(
    "SELECT * FROM avaliacoes WHERE filme_id = :id",
    Avaliacao::class,
    ['id' => $_GET['id']]
)->fetchAll();

view('filme', compact('filme', 'avaliacoes'));
?>