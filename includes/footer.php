<footer class="rodape">

  <div class="rodape__coluna rodape__coluna--alt">
    <img class="rodape__logo" src="./images/icons/logo-rodape.webp" width="512" height="290" alt="">
  </div>

  <div class="div_rodape_contatos">

    <div>
      <div class="rodape__coluna">
        <div class="rodape__titulo">
          <img class="rodape__icone" src="./images/icons/icon-awesome-phone-white.png" width="20" height="20" alt="">
        </div>
        <address class="rodape__infos txt-bloco">
          <a class="rodape__info">
            (<?= $ddd ?>)
            <?= $whatsapp ?>
          </a>
        </address>
      </div>
    </div>


    <div>
      <div class="rodape__coluna">
        <div class="rodape__titulo">
          <img class="rodape__icone" src="./images/icons/icon-material-mail.png" width="20" height="20" alt="">
        </div>
        <address class="rodape__infos txt-bloco">
          <a class="rodape__info">
            <?= $emailContatos ?>
          </a>
        </address>
      </div>
    </div>


    <div>
      <div class="rodape__coluna rodape__coluna--endereco">
        <div class="rodape__titulo">
          <img class="rodape__icone" src="./images/icons/icon-material-place.png" width="20" height="20" alt="">
        </div>
        <address class="rodape__infos txt-bloco">
          <span class="rodape__info">
            <?= $endereco ?>
            <?= $bairro ?>
          </span>
          <span class="rodape__info">
            <?= $cidade ?> /
            <?= $UF ?> CEP:
            <?= $cep ?>
          </span>
        </address>
      </div>
    </div>


  </div>

  <div class="rodape__baixo">
    <span class="rodape__copyright">

    <div class="icones-rodape-div">
    <div class="icone-facebook"></div>
    <div class="icone-instagram"></div>
    </div>




       <br>
     
      <span class="txt-upper"> © 2022 Larifér Embalagens.</span> Todos os direitos reservados.
    </span>
  </div>

</footer>