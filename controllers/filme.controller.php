<?php

$id = $_REQUEST['id'];

$filme = Filme::get($_GET['id']);

$avaliacoes = $database->query(
    "SELECT * FROM avaliacoes WHERE filme_id = :id",
    Avaliacao::class,
    ['id' => $_GET['id']]
)->fetchAll();

view('filme', compact('filme', 'avaliacoes'));
?>