<?php
//session_start();
include_once("conexao.php");

$origemEnvio = $_POST['origem'];

if($origemEnvio == "whatsapp"){
    $nome = filter_input(INPUT_POST, 'whatsapp-nome', FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST, 'whatsapp-email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'whatsapp-telefone', FILTER_UNSAFE_RAW);
    $mensagem = filter_input(INPUT_POST, 'whatsapp-mensagem', FILTER_UNSAFE_RAW);
}
else{
    $nome = filter_input(INPUT_POST, 'nome', FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_UNSAFE_RAW);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_UNSAFE_RAW);
}

$palavrachave = filter_input(INPUT_POST, 'palavrachave', FILTER_UNSAFE_RAW);
$origem = filter_input(INPUT_POST, 'origem', FILTER_UNSAFE_RAW);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_UNSAFE_RAW);

$result_formulario = "INSERT INTO formulario (nome, email, telefone, mensagem, palavrachave, origem,  cliente, datainserido) VALUES ('$nome', '$email', '$telefone', '$mensagem', '$palavrachave', '$origem', '$cliente', NOW())";
$resultado_formulario = mysqli_query($conn, $result_formulario);
?>