<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

<header class="menu">
  <div class="menu__ref menu__baixo">
    <div class="menu__presenca">
      <a class="menu__logoLink" href="#" title="<?= $nomeSite ?>">
        <img class="menu__logo" src="./images/logo-horizontal.webp" width="80" height="75" alt="<?= $nomeSite ?>" title="<?= $nomeSite ?>">
      </a>
    </div>

    <nav class="menu__navegacao menu__navegacao--fechado" data-menu-barra>
      <ul class="menu__lista">
        <li class="menu__item">
          <a href="#" class="menu__link" target="_blank" title="Home">
            HOME
          </a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" target="_blank" title="empresa">
            SOBRE
          </a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" target="_blank" title="Blog">
            PRODUTOS
          </a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" target="_blank" title="Serviços">
            BLOG
          </a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link" target="_blank" title="Boletins">
            ORÇAMENTO
          </a>
        </li>
      </ul>
    </nav>

    <div class="btns__topo">
            <a class="btn btn__topo" href="#contato">ENTRE EM CONTATO</a>
            <a class="btn btn--alt" href="tel:<?= $ddd . $whatsapp ?>">
              <img class="btn__imagem" src="./images/icons/icon-awesome-phone.svg" width="" height="" alt="">
              (<?= $ddd ?>) <?= $whatsapp ?></a>
          </div>

    <button class="menu__botao menu__botao--hamburguer" data-menu-hamburguer aria-label="Show menu button">
      <svg xmlns="http://www.w3.org/2000/svg" class="menu__icone menu__icone--hamburguer" viewBox="0 0 26.8 20" xml:space="preserve">
        <path d="M25.3 3.2H1.6C.7 3.2 0 2.5 0 1.6S.7 0 1.6 0h23.7c.9 0 1.6.7 1.6 1.6s-.8 1.6-1.6 1.6zM25.3 11.6H1.6C.7 11.6 0 10.9 0 10c0-.9.7-1.6 1.6-1.6h23.7c.9 0 1.6.7 1.6 1.6-.1.9-.8 1.6-1.6 1.6zM25.3 20H1.6C.7 20 0 19.3 0 18.4c0-.9.7-1.6 1.6-1.6h23.7c.9 0 1.6.7 1.6 1.6-.1.9-.8 1.6-1.6 1.6z" />
      </svg>
    </button>
  </div>
</header>