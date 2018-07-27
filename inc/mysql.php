<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';

$link = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
   exit('Falha de conexão ao banco de dados! Erro: ' . mysqli_connect_error());
}