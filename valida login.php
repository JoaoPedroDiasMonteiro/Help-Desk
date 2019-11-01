<?php
session_start();
print_r($_SESSION);
$_POST['email'];
$_POST['password'];

$usuarios_app = [
    ['email' => 'joaopedro453@hotmail.com', 'password' => '123'],
    ['email' => 'teste@app.com', 'password' => '1'],
    ['email' => 'teste2@app.com', 'password' => '22'],
    ['email' => 'teste3@app.com', 'password' => '333'],

];

$usuario_autenticado = false;

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
      $usuario_autenticado = true;
    }
};


if ($usuario_autenticado) {
    echo 'aaeeee';
    $_SESSION['autenticado'] = 'sim';
} else {
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'não';
}

// $_GET['email'];
// $_GET['password'];
// print_r($_GET);


