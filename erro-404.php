<?php
    $h1             = 'Erro 404';
    $descricao      = '';
    $key            = '';
    $ind            = ''.$h1.'';   
    $contato		= '';
    $img 			= 'erro-404';
    $categoria		= '';
    $sub_categoria	= '';
    
    include('includes/head.php');
?>
<style>
.formulario{
	display: none;
}
</style>
</head>
<body>

	<?php include $pastaInc.'header.php'; ?>

	<section id="erro-404">
		<h1>ERRO 404</h1>
		<div>
			<p>A página não foi encontrada ou não existe mais.</p>
			<p>Em caso de dúvidas ligue para <br /><a href="tel:<?=$ddd?><?=$phone?>"><?=$ddd?> <?=$phone?></a></p>
		</div>
	</section>

	<?php include $pastaInc.'footer.php';?>

</body>
</html>