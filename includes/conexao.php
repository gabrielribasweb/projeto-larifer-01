<?php
$servidor = "";
$usuario = "";
$senha = "";
$dbname = "";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Change character set to utf8
mysqli_set_charset($conn,"utf8");