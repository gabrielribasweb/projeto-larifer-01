<?php
$h1             = 'Obrigado';
$descricao      = 'Obrigado';
$key            = 'Obrigado';
$catprod       = 'lp1';
$categoria        = 'Obrigado';
$sub_categoria    = 'Obrigado';

include('includes/head.php');
?>
<style>
  .formulario,
  #banner-lp,
  #breadcrumb {
    display: none;
  }
</style>

<body>

  <?php include $pastaInc . 'header.php'; ?>

  <section class="obrigado">
    <div class="obrigado__conteudo">
      <h1 class="obrigado__titulo">
        Obrigado Por entrar em contato conosco</h1>
      <p class="obrigado__texto">
        Recebemos suas informações e em breve retornaremos.
      </p>
      <div class="obrigado__contatos">
        <p class="obrigado__duvida">
          Em caso de dúvidas, entre em contato:
        </p>
        <a class="obrigado__email" href="tel:<?= $ddd . $phone ?>">
          <img class="obrigado__icon" src="./images/icons/icon-awesome-phone.svg" alt="" width="" height="">
          <?= $emailContatos ?>
        </a>
      </div>
    </div>
  </section>

  <!--Contador de tempo -->
  <script type="text/javascript">
    document.write = "Preparando...";
    setTimeout(function() {
      history.back();
    }, 3000);
  </script>

  <?php include $pastaInc . 'footer.php'; ?>

</body>

</html>