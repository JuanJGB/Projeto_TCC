<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script type="text/javascript" src="javascript/funcionamento.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <title>Cadastro</title>
</head>
<body>
<header id="index.php">
    <h1>Bem vindo!</h1>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="">Cadastro</a></li>
            <li><a href="operacoes.php">Operações</a></li>
        </ul>
    </nav>

</header>

<br><br><br>

<form action="cadastrado.php" method="post" name="FrmCadastro">
    <label>
        <p id="pNomeGer">Nome:</p>

        <input type="text" name="InNomeGer">

        <p id="pUser">Usuário:</p>
        <input type="text" name="InUser">
        <p id="pSenha">Senha:</p>
        <input type="password" name="InSenha">

        <button type="submit" id="BtnCadastro">Cadastrar</button>
    </label>
</form>

<h6 id="copy">Todos os direitos reservados &copy;</h6>

</body>

</html>


