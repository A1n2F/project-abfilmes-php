<?php

require 'dados.php';

view('index', [
    'filmes' => $filmes
]);

?>