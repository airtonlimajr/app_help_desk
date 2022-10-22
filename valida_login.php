<?php
session_start();

//Variavel que verifica se a autenticação foi realizada
$usuario_autenticado = false;

//Usuarios do sistema
$usuarios_app = array(
    array('email' => 'airtonlimajr@outlook.com', 'senha' => '288201'),
    array('email' => 'user@teste.com', 'senha' => '1234')
);

foreach ($usuarios_app as $user) {
    $user['email'];
    $user['senha'];

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}
