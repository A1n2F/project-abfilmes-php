<?php

$filmes = (new DB)->filmes();


view('index', [ 'filmes' => $filmes ]);

?>