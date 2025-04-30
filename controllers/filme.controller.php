<?php

$id = $_REQUEST['id'];

$filme = $database->query(
    query: "SELECT * FROM filmes WHERE id = :id", 
    class: Filme::class, 
    params: ['id' => $_GET['id']])
    ->fetch();

view('filme', compact('filme'));
?>