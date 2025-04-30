<?php

$pesquisar = $_REQUEST['pesquisar'] ?? '';

$filmes = (new DB)->filmes($pesquisar);

view('index', [ 'filmes' => $filmes ]);

?>