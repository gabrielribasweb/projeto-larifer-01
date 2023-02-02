<?php
$h1 = '';
$descricao = '';
$key = '';
$linkativo = 'home';
$catprod       = 'lp1';
$categoria = '';
$sub_categoria = '';
$nomeImg = 'escritorio-de-contabilidade-em-sp';
include('includes/head.php');
?>

<body class="<?= $nomePagina ?>">

  <?php include $pastaInc . 'header.php'; ?>
  
  <?php include $pastaInc . 'whatsapp-flutuante.php'; ?>

  <main>

    <section id="banner-lp" class="banner">
      <div class="banner__flutuantes">
        <div class="banner__conteudo">
          <h1 class="banner__titulo txt-upper txt-pesado">
            Lorem Ipsum
          </h1>
          <p class="banner__texto">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
        </div>

        <?php include('./includes/formulario.php') ?>
      </div>

      <picture class="banner__galeria">
        <source class="banner__imagem" width="" height="" srcset="./<?= $imagesSite; ?>banner/<?= $nomeImg ?>.webp" media="(min-width: 993px)">
        <img class="banner__imagem" width="" height="" src="" alt="">
      </picture>
    </section>

    <section class="bloco">
      <div class="bloco__conteudo bloco__conteudo--alt">
        <div class="bloco__box bloco__box--alt">
          <h2 class="bloco__titulo">
            Lorem Ipsum
          </h2>
          <p class="bloco__texto">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          
          <div class="btns">
            <a class="btn" href="#contato">ENTRE EM CONTATO</a>
            <a class="btn btn--alt" href="tel:<?= $ddd . $whatsapp ?>">
              <img class="btn__imagem" src="./images/icons/icon-awesome-phone.svg" width="" height="" alt="">
              (<?= $ddd ?>) <?= $whatsapp ?></a>
          </div>
        </div>

        <div class="bloco__box bloco__box--imagem">
          <img class="bloco__imagem" width="" height="" src="./images/conteudo/conteudo-2-2x.webp" alt="">
        </div>
      </div>
    </section>

    <?php include $pastaInc . 'diferenciais.php'; ?>

    <section class="bloco bloco--int">
      <div class="bloco__box">
        <h3 class="bloco__titulo">
          Lorem Ipsum
        </h3>
        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>

        <h4 class="bloco__subtitulo">
          Lorem Ipsum
        </h4>
        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="bloco__box">
        <h3 class="bloco__titulo">
          Lorem Ipsum
        </h3>
        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>

        <ul class="bloco__lista">
          <li>Lorem Ipsum</li>
          <li>Lorem Ipsum</li>
          <li>Lorem Ipsum</li>
        </ul>

        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="bloco__box">
        <h3 class="bloco__titulo">
          Lorem Ipsum
        </h3>
        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>

        <ol class="bloco__lista bloco__lista--ordenada">
          <li>
            <h3 class="bloco__subtitulo bloco__subtitulo--lista">
              Lorem Ipsum
            </h3>
            <p class="bloco__texto">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          <li>
            <h3 class="bloco__subtitulo bloco__subtitulo--lista">
              Lorem Ipsum
            </h3>
            <p class="bloco__texto">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          </li>
          <li>
            <h3 class="bloco__subtitulo bloco__subtitulo--lista">
              Lorem Ipsum
            </h3>
            <p class="bloco__texto">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          </li>
        </ol>

        <p class="bloco__texto">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </p>
      </div>

      <div class="btns btns--int">
        <a class="btn" href="#contato">ENTRE EM CONTATO</a>
        <a class="btn btn--alt" href="tel:<?= $ddd . $whatsapp ?>">
          <img class="btn__imagem" src="./images/icons/icon-awesome-phone.svg" width="" height="" alt="">
          (<?= $ddd ?>) <?= $whatsapp ?></a>
      </div>
    </section>

    <section class="bloco">
      <div class="bloco__conteudo bloco__conteudo--alt">
        <div class="bloco__box bloco__box--alt">
          <h2 class="bloco__titulo">
            Lorem Ipsum
          </h2>
          <p class="bloco__texto">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>

          <div class="btns">
            <a class="btn" href="#contato">ENTRE EM CONTATO</a>
            <a class="btn btn--alt" href="tel:<?= $ddd . $whatsapp ?>">
              <img class="btn__imagem" src="./images/icons/icon-awesome-phone.svg" width="" height="" alt="">
              (<?= $ddd ?>) <?= $whatsapp ?></a>
          </div>
        </div>

        <div class="bloco__box bloco__box--imagem">
          <img class="bloco__imagem" width="" height="" src="./images/conteudo/conteudo-1-2x.webp" alt="">
        </div>
      </div>
    </section>

  </main>

  <?php include $pastaInc . 'footer.php'; ?>

  <?php include $pastaInc . 'cookies.php'; ?>

  <?php include $pastaInc . 'scripts.php'; ?>

</body>

</html>