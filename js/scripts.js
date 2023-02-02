$(document).ready(function () {
  $(".formulario button").click(function (e) {
    e.preventDefault();
    var nome = $("#nome")
      .val()
      .replace(/^\s+|\s+$/g, ""),
      email = $("#email")
        .val()
        .replace(/^\s+|\s+$/g, ""),
      telefone = $("#telefone")
        .val()
        .replace(/^\s+|\s+$/g, ""),
      mensagem = $("#mensagem")
        .val()
        .replace(/^\s+|\s+$/g, ""),
      regEx,
      validEmail;
    ($(".error")
      .remove(),
      nome.length < 2 && $("#nome")
        .after('<div class="error">Por favor, adicione seu nome</div>'),
      email.length < 2) ? $("#email")
        .after('<div class="error">Por favor, adicione seu e-mail</div>') : /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(email) || $("#email")
          .after('<div class="error">E-mail inválido ou formato incorreto</div>'),
      telefone.length < 2 && $("#telefone")
        .after('<div class="error">Por favor, adicione seu telefone</div>'),
      mensagem.length < 2 && $("#mensagem")
        .after('<div class="error">Por favor, escreva sua mensagem</div>'),
      nome.length > 1 &&
      email.length > 1 &&
      telefone.length > 1 &&
      mensagem.length > 1 &&
      ($("#enviar").css("display", "none"),
        $("#enviando-formulario").css("display", "block"),
        $(this).attr("disabled", "disabled"),
        setTimeout(function () {
          $("form").submit();
        }, 2e2));
  });
});

/* Cookie */
const cookieContainer = document.querySelector(".consent_cookies"),
  cookieButton = document.querySelector(".cookie-btn");
cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active"), localStorage.setItem("CookieConsentID", "true");
}),
  setTimeout(() => {
    localStorage.getItem("CookieConsentID") || cookieContainer.classList.add("active");
  }, 2e3);
$(document).ready(function () {
  $(".consent_cookies_popup").hide(),
    $(".consent_cookies_openpop").click(function (o) {
      o.preventDefault(),
        $(".consent_cookies_iframe").css("z-index", "99999"),
        $(".consent_cookies_iframe").css("display", "initial"),
        $(".consent_cookies_popup iframe").attr("src", $(this).attr("href")),
        $(".consent_cookies").fadeOut("slow"),
        $(".consent_cookies_popup").fadeIn("slow"),
        $(".consent_cookies_close").fadeIn("slow"),
        $(".consent_cookies_overlay").fadeIn("slow");
    }),
    $(".consent_cookies_close").click(function () {
      $(this).parent().fadeOut("slow"),
        $(".consent_cookies").fadeIn("slow"),
        $(".consent_cookies_overlay").fadeOut("slow"),
        $(".consent_cookies_close").fadeOut("slow"),
        $(".consent_cookies_iframe").css("z-index", "-1"),
        $(".consent_cookies_iframe").css("display", "none");
    }),
    $(".consent_cookies_overlay").click(function () {
      $(".consent_cookies_popup").hide(),
        $(".consent_cookies").fadeIn("slow"),
        $(".consent_cookies_overlay").fadeOut("slow"),
        $(".consent_cookies_close").fadeOut("slow"),
        $(".consent_cookies_iframe").css("z-index", "-1"),
        $(".consent_cookies_iframe").css("display", "none");
    });
});