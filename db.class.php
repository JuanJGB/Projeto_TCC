<?php

class db
{
    private $servername = 'sql207.epizy.com';
    private $database = 'epiz_22961353_db_dyope_assistant';
    private $username = 'epiz_22961353';
    private $password = 'admin';

    public function conecta_mysql()
    {
        $connect = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        mysqli_set_charset($connect, 'utf8');

        if (mysqli_connect_errno()) {
            echo 'Erro ao se conectar com Banco de dados: ' . mysqli_connect_error();
        }
        return $connect;

    }


}
