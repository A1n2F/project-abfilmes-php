<?php

require 'Validacao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email'],
        // 'senha' => ['required', 'min:8', 'max:15']
    ], $_POST);

    if($validacao->naoPassou()) {
        $_SESSION['validacoes'] = $validacao->validacoes;
        header('location: /registrar');
        exit();
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