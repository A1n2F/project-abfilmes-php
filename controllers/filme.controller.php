<?php

require 'dados.php';


$id = $_REQUEST['id'];

$filtrado = array_filter($filmes, function($f) use($id) {
    return $f['id'] == $id;
});

$filme = array_pop($filtrado);

$view = "filme";
require "views/template/app.php";

?>