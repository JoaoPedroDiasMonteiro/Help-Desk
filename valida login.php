<?php
session_start();
$_POST['email'];
$_POST['password'];
//
$usuario_id = null;
$usuario_perfil_id = null;

// usuarios do sistema
$usuarios_app = [
    ['id' => 1, 'email' => 'joaopedro453@hotmail.com', 'password' => '123', 'perfil' => 0 ],
    ['id' => 2, 'email' => 'jose@app.com', 'password' => '123', 'perfil' => 1],
    ['id' => 3, 'email' => 'maria@app.com', 'password' => '123', 'perfil' => 1],
    ['id' => 4, 'email' => 'teste@app.com', 'password' => '123', 'perfil' => 1],

];

$usuario_autenticado = false;

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil'];
    }
};


if ($usuario_autenticado) {
    $_SESSION['autenticado'] = 'sim';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['user_perfil'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'não';
}

// $_GET['email'];
// $_GET['password'];
// print_r($_GET);
