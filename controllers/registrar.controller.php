<?php

require 'Validacao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([
        'nome' => ['required'],
        'email' => ['required', 'email'],
        'senha' => ['required', 'min:8', 'max:15']
    ], $_POST);

    if($validacao->naoPassou('registrar')) {
        header('location: /registrar');
        exit();
    }

    // if(sizeof($validacoes) > 0) {
    //     $_SESSION['validacoes'] = $validacoes;
    //     noView('registrar');
    //     exit();
    // }
    
    $database->query(
        query: "INSERT INTO usuarios ( nome, email, senha ) VALUES ( :nome, :email, :senha )",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );

    flash()->push('mensagem', 'Registrado com sucesso!');

    header('location: /registrar');
    exit();
}

noView('registrar');

?>