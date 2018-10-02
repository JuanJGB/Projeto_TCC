<?php
$servername = '127.0.0.1';
$database = 'projetotcc__oort';
$username = 'root';
$password = '';
 $connect = mysqli_connect($servername,$username,$password,$database);

     if (!$connect) {
         die('Connection failed: ' . mysqli_connect_error());
     }
     mysqli_close($connect);
