<?php

$filmes = Filme::all($_REQUEST['pesquisar'] ?? '');

view('index', [ 'filmes' => $filmes ]);

?>