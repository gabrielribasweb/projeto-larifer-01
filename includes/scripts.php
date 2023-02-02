<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.js"></script>

<div class="consent_cookies">
    <div class="consent_cookies_p">
        <p>Usamos cookies em nosso site para fornecer a experiência mais relevante, lembrando suas preferências e visitas repetidas. Ao clicar em "CONCORDO", você concorda com o uso de TODOS os cookies. Saiba mais em nossa <a href="<?= $dominio; ?>includes-i/politica-de-privacidade-e-cookies.php" class="consent_cookies_openpop">Política de Privacidade e Cookies</a>.</p>
    </div>
    <div class="consent_cookies_btn"><button class="cookie-btn">CONCORDO</button></div>
</div>
<div class="consent_cookies_iframe">
    <div class="consent_cookies_popup"><iframe src="#" style="width: 100%; height: 100%">
            <p>Your browser does not support iframes.</p>
        </iframe>
        <div class="consent_cookies_close"><img data-src="images-i/icons/ic-fechar.webp" width="128" height="128" alt="<?= $nomeSite; ?> - <?= $h1; ?>" title="<?= $nomeSite; ?> - <?= $h1; ?>" loading="lazy" class="lazyload"></div>
    </div>
</div>
<div class="consent_cookies_overlay"></div>
<script type="text/javascript">
    const accordionItem = document.querySelectorAll('.accordion-item');
    const onClickAccordionHeader = e => {
        if (e.currentTarget.parentNode.classList.contains('active')) {
            e.currentTarget.parentNode.classList.remove("active");
        } else {
            Array.prototype.forEach.call(accordionItem, (e) => {
                e.classList.remove('active');
            });
            e.currentTarget.parentNode.classList.add("active");
        }
    };
    const init = () => {
        Array.prototype.forEach.call(accordionItem, (e) => {
            e.querySelector('.accordion-header').addEventListener('click', onClickAccordionHeader, false);
        });
    };
    document.addEventListener('DOMContentLoaded', init);
</script>

<script src="js/scripts.js"></script>
<script src="js/menu.js"></script>
<script src="js/whatsapp.js"></script>