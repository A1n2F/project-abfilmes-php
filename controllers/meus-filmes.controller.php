<?php

if(!auth()) {
    header('location: /');
    exit();
}

$filmes = Filme::meus(auth()->id);


noView('meus-filmes', compact('filmes'));

?>