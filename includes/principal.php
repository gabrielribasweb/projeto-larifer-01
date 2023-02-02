<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('funcoes.php');

// Dados do Cliente
$creditos               = 'Integração Digital - Consultoria em Marketing Digital';
$siteCreditos           = 'www.integracaodigital.com.br';
$nomeSite               = '';
$tipoSite               = ''; // 'adwords', 'seo', 'lp' ou 'site';
$idCliente				= '';
$slogan                 = '';
$ddd                    = '11';
$phone                  = '';
$telPhone               = '3405-0700';
$whatsapp               = '3405-0700';
$emailContatos          = 'contato@larifer.com.br';
$classificacao          = '';
//$horariaFuncionamento	= 'Seg-Sex: 08h - 21h Sab: 9h - 18h';
$endereco               = 'Rua Eduardo Froner, 165';
$bairro                 = 'Pq. das Nações';
$cidade                 = 'Guarulhos';
$UF                     = 'SP';
$cep                    = '07234-590';
$latitude               = '';
$longitude              = '';

$urlPagina              = explode("/", $_SERVER['PHP_SELF']);
$urlPagina              = end($urlPagina);
$nomePagina             = substr($urlPagina, 0, strrpos($urlPagina, ".php"));

include('acesso.php');

//Outras Pastas
$pastaInc           = 'includes/';
$pastaJS            = 'js/';
$pastaCSS           = 'css/';
$pastaPhpMailer     = 'phpmailer/';
$imagesSite         = 'images/';