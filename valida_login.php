<?php
require_once("funcoes_valida_login.php");

$email_usuario = $_POST['Email'];
$senha_usuario = $_POST['Password'];

$usuario_validado = valida_login($email_usuario, $senha_usuario);

session_start();

    if ($usuario_validado){
        header("location: gerente_index.php");
    } else {
        include_once "login_gerente.php";
        echo '<h2>Usuário ou senha inválidos!<h2>';
    }