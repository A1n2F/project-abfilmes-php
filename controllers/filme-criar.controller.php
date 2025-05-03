<?php

require 'Validacao.php';

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /meus-filmes');
    exit();
}

if(!auth()) {
    abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$descricao = $_POST['descricao'];
$ano = $_POST['ano'];

$validacao = Validacao::validar([
    'titulo' => ['required'],
    'genero' => ['required'],
    'descricao' => ['required'],
    'ano' => ['required'],
], $_POST);

if($validacao->naoPassou()) {
    header('location: /meus-filmes');
    exit();
}

$database->query(
    "INSERT INTO filmes (titulo, genero, descricao, ano, usuario_id) 
    VALUES (:titulo, :genero, :descricao, :ano, :usuario_id)",
    params: compact('titulo', 'genero', 'descricao', 'ano', 'usuario_id')
);

flash()->push('mensagem', 'Filme cadastrado com sucesso!');
header('location: /meus-filmes');
exit();


?>