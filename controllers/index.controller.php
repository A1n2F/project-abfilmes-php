<?php

$db = new DB();
$filmes = $db->filmes();


view('index', [ 'filmes' => $filmes ]);

?>