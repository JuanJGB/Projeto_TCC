<?php
require_once ("funcoes_valida_login.php");
include_once "logado.php";
$email_usuario = $_POST['Email'];
$senha_usuario = $_POST['Password'];

$usuario_validado = valida_login($email_usuario,$senha_usuario);

if ($usuario_validado){
    echo 'Acesso liberado';
}else{
    echo 'Acesso negado';

}