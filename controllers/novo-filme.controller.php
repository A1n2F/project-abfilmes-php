<?php


if(!auth()) {
    header('location: /');
    exit();
}

$filmes = $database->query(
    "SELECT * FROM filmes WHERE usuario_id = :id",
    Filme::class,
    ['id' => auth()->id]
);


view('novo-filme', compact('filmes'));

?>