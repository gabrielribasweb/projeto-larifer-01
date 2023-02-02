<div id="contato" class="formulario">
  <h2 class="txt-upper formulario__titulo">
    FALE CONOSCO
  </h2>

  <form class="formulario__form " action="mailer.php" method="post">
    <input type="hidden" id="cliente" name="cliente" value="<?php echo $idCliente; ?>">
    <input type="hidden" id="palavrachave" name="<?php echo $h1; ?>" value="<?php echo $h1; ?>">
    <input type="hidden" id="origem" name="origem" value="<?php echo $tipoSite; ?>">

    <div class="formulario__dado">
      <label for="nome" class="formulario__etq">Nome:</label>
      <input required data-entrada type="text" id="nome" name="nome" placeholder="Nome e Sobrenome" class="formulario__ipt">
    </div>

    <div class="formulario__dado">
      <label for="telefone" class="formulario__etq">Telefone:</label>
      <input required data-entrada type="tel" id="telefone" name="telefone" placeholder="(11) 12345-6789" class="formulario__ipt">
    </div>

    <div class="formulario__dado formulario__dado--email">
      <label for="email" class="formulario__etq">E-mail:</label>
      <input required data-entrada type="email" id="email" name="email" placeholder="nome@suaempresa.com.br" class="formulario__ipt">
    </div>

    <div class="formulario__dado formulario__dado--menssage">
      <label for="mensagem" class="formulario__etq">Mensagem:</label>
      <textarea data-entrada rows="4" id="mensagem" name="mensagem" placeholder="Como a Contec pode te ajudar?" class="formulario__ipt"></textarea>
    </div>

    <div class="formulario__envio">
      <input id="enviar" class="btn btn--form" type="submit" value="Enviar" data-enviar-formulario>
      <div id="enviando-formulario" class="formulario__mensagem">Enviando
        <span class="formulario__ponto">.</span>
        <span class="formulario__ponto">.</span>
        <span class="formulario__ponto">.</span>
      </div>
    </div>
  </form>
</div>