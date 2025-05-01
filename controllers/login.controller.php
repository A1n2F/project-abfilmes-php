<?php

require 'Validacao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required', 'min:8', 'max:15'],
    ], $_POST);

    if($validacao->naoPassou('login')) {
        header('location: /login');
        exit();
    }

    $usuario = $database->query(
        query: "SELECT * FROM usuarios WHERE email = :email AND senha = :senha",
        class: Usuario::class,
        params: compact('email', 'senha')
    )->fetch();

    if($usuario) {
        $_SESSION['auth'] = $usuario;
        
        flash()->push('mensagem', 'Seja bem vindo '. $usuario->nome . '!');
        header('location: /');
        exit();
    }
}

noView('login');

?>