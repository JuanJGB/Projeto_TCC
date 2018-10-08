<?php
function valida_login($login,$senha){
    $login_bd = 'JuanJGB';
    $senha_bd = 'qwe312';

    if ($login ==$login_bd && $senha == $senha_bd){
        return true;
    }else{
        return false;
    }

}