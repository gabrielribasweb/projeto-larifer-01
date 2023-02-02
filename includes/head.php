<?php
/*----------------------------------------
-Chamada das funções principal
-----------------------------------------*/
require "includes/principal.php";
/*----------------------------------------
- Chamada das configurações
-----------------------------------------*/
require "includes/config.php";
/*----------------------------------------
-Definir cookie para a página
------------------------------------------*/
//setcookie($dominio . $urlPagina, (time() + (2 * 3600))); /*Expira em duas horas */

?>
<!DOCTYPE html>
<html lang="pt-BR">
<!--
  <?= $creditos; ?>
		<?= $siteCreditos; ?>
	-->

<head>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->
  <title><?= $h1 ?> - <?= $nomeSite; ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?= $descricao ?>">
  <link rel="canonical" href="<?= $urlCanonical; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="max-image-preview:large">
  <link rel="preconnect dns-prefetch" href="https://www.googletagmanager.com" crossorigin>
  <link rel="preconnect dns-prefetch" href="https://www.google-analytics.com" crossorigin>
  <link rel="preconnect dns-prefetch" href="https://stats.g.doubleclick.net" crossorigin>
  <link rel="preconnect dns-prefetch" href="https://www.google.com" crossorigin>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?= $h1 . ", " . $key ?>">
  <meta name="robots" content="index, follow">
  <meta property="googlebot" content="index,follow">
  <meta name="distribution" content="global">
  <meta name="audience" content="all">
  <meta name="Page-Topic" content="<?= $h1; ?>">
  <meta name="rating" content="general">
  <meta name="city" content="<?= $cidade; ?>">
  <meta name="country" content="Brasil">
  <meta name="geo.region" content="BR-<?= $UF ?>">
  <meta name="geo.placename" content="<?= $cidade; ?>">
  <meta name="geo.position" content="<?= $latitude; ?>;<?= $longitude; ?>">
  <meta name="ICBM" content="<?= $latitude; ?>,<?= $longitude; ?>">
  <meta name="rating" content="General">
  <meta name="author" content="<?= $creditos; ?>">
  <meta name="original-source" content="<?= $urlCanonical; ?>">
  <meta property="publisher" content="<?= $creditos; ?>">
  <meta name="twitter:card" content="<?= $dominio . $imagesSite; ?>logo.webp">
  <meta name="twitter:site" content="<?= $urlCanonical; ?>">
  <meta name="twitter:title" content="<?= $h1 ?>- <?= $nomeSite ?>">
  <meta name="twitter:description" content="<?= $descricao; ?>">
  <meta name="twitter:image:src" content="<?= $dominio . $imagesSite; ?>logo.webp">
  <meta property="og:title" content="<?= $h1 ?>- <?= $nomeSite ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $urlCanonical; ?>">
  <meta property="og:image" content="<?= $dominio . $imagesSite; ?>logo.webp">
  <meta property="og:description" content="<?= $descricao; ?>">
  <meta property="og:site_name" content="<?= $nomeSite ?>">
  <meta property="og:author" content="<?= $nomeSite ?>">

  <!-- EFETUAR A TROCA SEMPRE QUE SUBIR CLIENTE NOVO -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?= $dominio; ?>images/pwa/ios/57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= $dominio; ?>images/pwa/ios/60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= $dominio; ?>images/pwa/ios/72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= $dominio; ?>images/pwa/ios/76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= $dominio; ?>images/pwa/ios/114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= $dominio; ?>images/pwa/ios/120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= $dominio; ?>images/pwa/ios/144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= $dominio; ?>images/pwa/ios/152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $dominio; ?>images/pwa/ios/180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= $dominio; ?>images/pwa/android-launchericon-192-192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $dominio; ?>images/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $dominio; ?>images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= $dominio; ?>images/favicon/favicon-96x96.png">
  <link rel="shortcut icon" href="<?= $dominio; ?>images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/pwa/android-launchericon-144-144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- <link rel="manifest" href="<?= $dominio; ?>manifest.json"> -->
  <!-- <link rel="manifest" href="<?= $dominio; ?>generationInfo.json"> -->
  <?php include 'schema.php'; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet preload prefetch" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" crossorigin="anonymous">
  <!-- <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('service-worker.js');
      });
    }
  </script> -->
  <style>
    <?php
    $pastaCSS = 'css/';
    $pastaModules = 'modules/';
    $arquivosCSS = array(
      $pastaCSS . 'lp.css',
      $pastaCSS . $pastaModules . 'reset.min.css',
      $pastaCSS . $pastaModules . 'variaveis.css',
      $pastaCSS . $pastaModules . 'animacao.css',
      $pastaCSS . $pastaModules . 'utilitarios.css',
      $pastaCSS . $pastaModules . 'botoes.css',
      $pastaCSS . $pastaModules . 'menu.css',
      $pastaCSS . $pastaModules . 'banner.css',
      $pastaCSS . $pastaModules . 'bloco.css',
      $pastaCSS . $pastaModules . 'diferenciais.css',
      $pastaCSS . $pastaModules . 'faq.css',
      $pastaCSS . $pastaModules . 'rodape.css',
      $pastaCSS . $pastaModules . 'formulario.css',
      $pastaCSS . $pastaModules . 'whatsapp.css',
      $pastaCSS . $pastaModules . 'cookies.css',
      $pastaCSS . $pastaModules . 'obrigado.css',
      $pastaCSS . $pastaModules . 'mapa-site.css',
    );
    for ($i = 0; $i < count($arquivosCSS); $i++) {
      echo arquivos_inline($arquivosCSS[$i]);
    }
    ?>
  </style>
  <!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>