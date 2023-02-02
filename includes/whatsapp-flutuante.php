<div id="whatsapp" class="whatsapp abrewhatsapp">
  <img class="whatsapp__imagem img" src="images/icons/whatsapp-2x.webp" width="128" height="129" alt="<?= $nomeSite; ?>- <?= $h1; ?>" title="<?= $nomeSite; ?>- <?= $h1; ?>" loading="lazy">
</div>

<div id="whatsappform" class="whatsapp__box">
  <div id="whatsappform-header" class="whatsapp__cabecalho">
    <div id="whatsappform-fechar">
      <img class="whatsapp__fechar" src="images/icons/ic-fechar.webp" width="128" height="128" alt="<?= $nomeSite; ?> - <?= $h1; ?>" title="<?= $nomeSite; ?> - <?= $h1; ?>" loading="lazy">
    </div>
    <p>Olá! Preencha os campos abaixo para iniciar a conversa no WhatsApp</p>
  </div>

  <form class="whatsapp__formulario" action="mailer.php" method="post">
    <!-- CAPTCHA <?php include('includes/controller_captcha.php'); ?> -->
    <input type="hidden" id="whatsapp-cliente" name="cliente" value="<?php $idCliente; ?>">
    <input type="hidden" id="whatsapp-palavrachave" name="palavrachave" value="<?php echo $h1; ?>">
    <input type="hidden" id="whatsapp-origem" name="origem" value="whatsapp">
    <div>
      <label for="whatsapp-nome">Nome *</label><br>
      <input type="text" id="whatsapp-nome" class="whatsapp__ipt" name="whatsapp-nome" required>
    </div>
    <div>
      <label for="whatsapp-email">E-mail *</label><br>
      <input type="email" id="whatsapp-email" class="whatsapp__ipt" name="whatsapp-email" required>
    </div>
    <div>
      <label for="whatsapp-telefone">Telefone *</label><br>
      <input type="text" id="whatsapp-telefone" class="whatsapp__ipt" name="whatsapp-telefone" required>
      <input type="hidden" id="whatsapp-mensagem" class="whatsapp__ipt" name="whatsapp-mensagem" value="Mensagem via WhatsApp">
    </div>
    <div class="text-center">
      <button id="whatsapp-enviar" type="submit" class="whatsapp__enviar">Iniciar a conversa</button>
      <div id="whatsapp-enviando-formulario" class="formulario__mensagem">
        Iniciando conversa
        <span class="formulario__ponto">.</span>
        <span class="formulario__ponto">.</span>
        <span class="formulario__ponto">.</span>
      </div>
    </div>
  </form>
</div>