<!DOCTYPE html>
<html lang="pt-br">
<head>

    <script type="text/javascript" src="javascript/funcionamento.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>



    <title>Cadastro</title>
    <meta charset="utf-8">
</head>
<body>
<header id="index.php">
    <h1>Bem vindo!</h1>

    <nav>
        <li><a href="index.php">Home</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="">Cadastro</a></li>
        <li><a href="operacoes.php">Operações</a></li>
    </nav>

</header>

<br><br><br>

<form action="cadastrado.php" method="post" name="FrmCadastro">
    <p id="pNomeGer">Nome:</p>
    <input type="text" name="InNomeGer">
    <p id="pUser">Usuário:</p>
    <input type="text" name="InUser">
    <p id="pSenha">Senha:</p>
    <input type="password" name="InSenha">

    <button type="submit" id="BtnCadastro" >Cadastrar</button>

</form>


<h6 id="copy">Todos os direitos reservados &copy;</h6>
</body>

</html>


