<?php

require '../Validacao.php';

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
    header('location: /novo-filme');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
$imagem = "images/$novoNome.$extensao";

move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ . '/../public/' . $imagem);

$database->query(
    "INSERT INTO filmes (titulo, genero, descricao, ano, usuario_id, imagem) 
    VALUES (:titulo, :genero, :descricao, :ano, :usuario_id, :imagem)",
    params: compact('titulo', 'genero', 'descricao', 'ano', 'usuario_id', 'imagem')
);

flash()->push('mensagem', 'Filme cadastrado com sucesso!');
header('location: /novo-filme');
exit();


?>