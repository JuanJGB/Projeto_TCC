<?php

if (empty($_POST['InNomeGer']) or empty($_POST['InUser']) or  empty($_POST['InSenha']))
{
    echo 'Preencha os campos';

} else {
    $usuario = $_POST['InUser'];
    $nome_ger = $_POST['InNomeGer'];
    $senha = $_POST['InSenha'];

    echo 'Cadastrado com sucesso!';

}
