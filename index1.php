<?php
include_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>

    <script type="text/javascript" src="javascript/funcionamento.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>O.P.R.T</title>
    <meta charset="utf-8">
</head>
<body>
 <header id="index.php">
     <h1>Bem vindo!</h1>

     <nav>
         <ul>
         <li><a href="">Home</a></li>
         <li><a href="sobre.php">Sobre</a></li>
         <li><a href="cadastro.php">Cadastro</a></li>
         <li><a href="operacoes.php">Operações</a></li>
         </ul>
     </nav>

 </header>

<br><br><br>

<form action="logado.php" method="post" id="FrmLogin">
    <label>
    <p id="pUser">Usuário:</p>
    <input type="text" id="InUser">
    <p id="pSenha">Senha:</p>
    <input type="password" id="InSenha">
    <button type="submit" id="BtnLogin" onclick="">Login</button>

    <a href="cadastro.php"><input type="button" value="Cadastrar-se"/></a>
    </label>
</form>


<h6 id="copy">Todos os direitos reservados &copy;</h6>
</body>

</html>
