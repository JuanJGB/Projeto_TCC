<?php
    $cpf =  isset($_POST['cpf']) ? $_POST['cpf']: '';

    $total_string_cpf = strlen($cpf);
    if ($total_string_cpf != 11 && $cpf!=''){
        include_once 'cadastro.php';
        echo '<h4>CPF inválido</h4>';
    }else{
        header('Location: login.php');
        echo 'Cadastrado com sucesso!';

}
