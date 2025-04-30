<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validacoes = [];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(strlen($nome) == 0) {
        $validacoes [] = 'O nome é obrigatório';
    }

    if(strlen($email) == 0) {
        $validacoes [] = 'O email é obrigatório';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes [] = 'O email é inválido';
    }

    if(strlen($senha) == 0) {
        $validacoes [] = 'A senha é obrigatório';
    }

    if(strlen($senha) < 8 || strlen($senha) > 15) {
        $validacoes [] = 'A senha precisa ter entre 8 e 15 caracteres';
    }

    if(sizeof($validacoes) > 0) {
        $_SESSION['validacoes'] = $validacoes;
        noView('registrar');
        exit();
    }
    
    $database->query(
        query: "INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha )",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );

    header('location: /registrar?mensagem=Registrado com sucesso!');
    exit();
}

$mensagem = $_REQUEST['mensagem'] ?? '';


noView('registrar', compact('mensagem'));

?>