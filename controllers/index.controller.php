<?php

$filmes = (new DB)->filmes($_REQUEST['pesquisar']);


view('index', [ 'filmes' => $filmes ]);

?>