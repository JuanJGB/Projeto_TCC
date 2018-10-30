<?php
$servername = '127.0.0.1';
$database = 'projetotcc_oort';
$username = 'root';
$password = '';
$connect = mysqli_connect($servername,$username,$password,$database);

     if (!$connect) {
         include_once '404.php';
         die('Connection failed: ' . mysqli_connect_error());
     }
     mysqli_close($connect);
