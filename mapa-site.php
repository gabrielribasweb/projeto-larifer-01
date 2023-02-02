<?php
$h1             = 'Mapa Site';
$descricao      = 'Mapa Site';
$key            = 'Mapa Site';
$catprod       = '';
$nomeimg = '';
$titulocategoria = 'Mapa Site';
$categoria        = 'Mapa Site';
$sub_categoria    = 'Mapa Site';

include('includes/head.php');
?>
<style>
    .formulario {
        display: none;
    }
</style>
</head>

<body id="lp" class="<?= $catprod ?> <?= $nomePagina ?>">
    <?php include $pastaInc . 'header.php'; ?>
    <section id="mapa-site">
        <div id="mapa-site-titulo">
            <h1>Mapa Site</h1>
        </div>
        <ol>
            <li><a href="https://www.com.br" title="">HOME</a></li>
            <li><a href="https://www.com.br" title="">PRODUTOS</a></li>
            <li><a href="https://www.com.br" title="">SERVIÇOS</a></li>
            <li><a href="https://www.com.br" title="">SOBRE NÓS</a></li>
            <li><a href="https://www.com.br" title="">CONTATO</a></li>
            <li><a href="#">OUTROS</a></li>
        </ol>
        <ol id="links-lp">
            <li class="cat-"><a href="<?= $dominio; ?>.php" title=""></a></li>
        </ol>
    </section>
    <?php include $pastaInc . 'footer.php'; ?>
    <script>
        // Deixa a lista em ordem alfabética
        $(function() {
            $.fn.sortList = function() {
                var mylist = $(this);
                var listitems = $('li', mylist).get();
                listitems.sort(function(a, b) {
                    var compA = $(a).text().toUpperCase();
                    var compB = $(b).text().toUpperCase();
                    return (compA < compB) ? -1 : 1;
                });
                $.each(listitems, function(i, itm) {
                    mylist.append(itm);
                });
            }
            $("#links-lp").sortList();
        });
    </script>

    <?php include $pastaInc . 'scripts.php'; ?>

</body>

</html>