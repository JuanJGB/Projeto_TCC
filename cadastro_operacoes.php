<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Operações</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-secondary">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Cadastro de operação</div>
        <div class="card-body">
            <form method="post" action="cadastro_operacoes.php">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="nomeCompleto" class="form-control" autofocus="autofocus"
                                   placeholder="Nome Completo" required="required">
                            <label for="nomeCompleto">Nome operação</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="cpf" class="form-control" placeholder="CPF"
                                       required="required">
                                <label for="cpf">CPF</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="rg" class="form-control" placeholder="RG"
                                       required="required">
                                <label for="rg">RG</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" name="inputEmail" class="form-control" placeholder="Endereço de e-mail"
                               required="required">
                        <label for="inputEmail">Endereço de e-mail</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="inputPassword" class="form-control" placeholder="Senha"
                                       required="required">
                                <label for="inputPassword">Senha</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="confirmPassword" class="form-control"
                                       placeholder="Confirmar senha" required="required">
                                <label for="confirmPassword">Confirmar senha</label>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-12">
                        <button onclick="history.go(-1)" class="btn btn-primary">Cancelar</button>
                        <input class="btn btn-primary" type="submit" value="Cadastrar">
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
