let whatsappBotao = document.querySelector("#whatsapp");
let whatsappBox = document.querySelector(".whatsapp__box");
let whatsappFechar = document.querySelector(".whatsapp__fechar");

whatsappBotao.onclick = function () {
  document.documentElement.classList.toggle("whatsapp--ativo");
  whatsappBox.classList.toggle("whatsapp__box--ativo");
};

whatsappFechar.onclick = function () {
  document.documentElement.classList.toggle("whatsapp--ativo");
  whatsappBox.classList.toggle("whatsapp__box--ativo");
};

document.documentElement.onclick = function (event) {
  if (event.target === document.documentElement) {
    document.documentElement.classList.toggle("whatsapp--ativo");
    whatsappBox.classList.toggle("whatsapp__box--ativo");
  }
};