<?php
if (isset($_POST["ajax"]) && $_POST["ajax"] == true) {
  require_once('principal.php');
?>
  <div class="titulo-redes-sociais">Compartilhe nas Redes Sociais!</div>

  <?php /* Curtir no Facebook */ ?>
  <div class="botao-oficial-redes-sociais">
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-like" data-href="<?= $dominio . $nomePagina ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
  </div>

  <?php /* Google Plus +1 */ ?>
  <div class="botao-oficial-redes-sociais">
    <div class="g-plusone" data-size="medium"></div>
    <script type="text/javascript">
      window.___gcfg = {
        lang: 'pt-BR'
      };
      (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
      })();
    </script>
  </div>

  <?php /* Tumblr */ ?>
  <div class="botao-oficial-redes-sociais">
    <a class="tumblr-share-button" data-color="blue" data-notes="right" href="https://embed.tumblr.com/share"></a>
    <script>
      ! function(d, s, id) {
        var js, ajs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id;
          js.src = "https://secure.assets.tumblr.com/share-button.js";
          ajs.parentNode.insertBefore(js, ajs);
        }
      }(document, "script", "tumblr-js");
    </script>
  </div>

  <?php /* Reddit */ ?>
  <div class="botao-oficial-redes-sociais">
    <a href="<?= $dominio . $nomePagina ?>" onclick="window.location = '//www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="//www.redditstatic.com/spreddit7.gif" alt="submit to reddit" border="0" /> </a>
  </div>

  <?php /* Facebook Enviar */ ?>
  <div class="botao-oficial-redes-sociais">
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-send" data-href="<?= $dominio . $nomePagina ?>" data-colorscheme="light"></div>
  </div>

  <?php /* Compartilhar Linkedin */ ?>
  <div class="botao-oficial-redes-sociais">
    <script src="//platform.linkedin.com/in.js" type="text/javascript">
    </script>
    <script type="IN/Share" data-counter="right"></script>
  </div>

  <?php /* Pinterest */ ?>
  <div class="botao-oficial-redes-sociais">
    <a href="//br.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="Pin" /></a>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
  </div>
<?php
  exit;
}

if ($exibirRedesSociaisConteudo == true) :
  if (isset($nomePagina) && $nomePagina != "") {
    $twitterHashPreparacao = strtolower($nomePagina);
    $twitterHashPreparacao = explode(".", $twitterHashPreparacao);
    $twitterHash = $twitterHashPreparacao[0];
    $twitterHash = str_replace("-", ", ", $twitterHash);
  } else {
    $twitterHash = "";
  }
?>

  <script type="text/javascript">
    function popup_centralizado(pageURL, title, w, h) {
      var left = (screen.width / 2) - (w / 2);
      var top = (screen.height / 2) - (h / 2);
      var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    }
  </script>

  <div class="redes-sociais-conteudo">

  </div>

<?php endif; ?>