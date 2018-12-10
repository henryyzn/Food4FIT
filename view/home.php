<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#9CC283">
    <meta name="msapplication-navbutton-color" content="#9CC283">
    <meta name="apple-mobile-web-app-status-bar-style" content="#9CC283">
	<title>Food 4Fit</title>
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bases.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="assets/css/font-style.css">
    <link rel="stylesheet" href="assets/css/align.css">
    <link rel="stylesheet" href="assets/css/keyframes.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
	<script src="assets/public/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/scripts.js"></script>
</head>
<body>
	<?php require_once("components/navbar.html"); ?><!-- BARRA DE NAVEGAÇÃO VIA PHP -->
    <header id="header-index"><!-- CABEÇALHO DA INDEX -->
        <div id="header-index-content" class="animate fadeInDown"><!-- PRIMEIRO CONTAINER-FILHO DO CABEÇALHO DA INDEX -->
            <img src="assets/images/backgrounds/home.jpg" alt="Header"><!-- IMAGEM DO CONTAINER-FILHO DO CABEÇALHO DA INDEX -->
            <div id="header-index-overlay"><!-- CAMADA DO CONTAINER-FILHO DO CABEÇALHO DA INDEX -->
                <h2 class="padding-left-30px padding-bottom-15px">Legumes Sem Limite</h2><!-- TÍTULO DO DESTAQUE -->
                <p class="padding-left-30px">Um prato repleto de legumes fresquinhos para a sua dieta!</p><!-- DESCRIÇÃO DO DESTAQUE -->
                <div id="header-index-overlay-seemore"><!-- RODAPÉ VIA PHP -->
                    <figure>
                        <img src="assets/images/icons/arrow.svg" alt="Ver Mais Sobre Prato Destaque"><!-- IMAGEM DO BOTÃO PARA VER MAIS SOBRE O DESTAQUE -->
                    </figure>
                </div>
            </div>
        </div>
    </header>
    <section class="main"><!-- CONTAINER-MÃE DO SITE -->
        <article class="generic-block"><!-- SEGUNDO CONTAINER-FILHO DO CABEÇALHO DA INDEX -->
            <h2 id="page-title">DESTAQUES</h2><!-- TÍTULO DA PÁGINA -->
            <div class="generic-grid animate fadeInUp">
                <?php 
                    require_once("../controller/DestaqueController.class.php");
                    $destaques = DestaqueController::listar();
                    foreach ($destaques as $d) {
                ?>
                <div class="generic-card">
                    <img src="<?= $d->getFoto() ?>" alt="Teste" class="generic-card-img">
                    <div class="generic-card-overlay">
                        <span class="card-dish-name margin-bottom-30px"><?= $d->getTitulo() ?></span>
                        <div class="card-dish-separator margin-bottom-15px"></div>
                        <p class="card-dish-description margin-bottom-30px"><?= $d->getResumo() ?></p>
                        <div class="card-dish-price margin-bottom-30px"><!-- CONTAINER DO PREÇO DO PRATO NA INDEX -->
                            <span class="padding-right-15px">R$ <?= $d->getPreco() ?></span><!-- PREÇO -->
                            <div><img src="assets/images/simbols/delivery-truck.svg" alt="Compra Rápida"></div><!-- COMPRA RAPIDA -->
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="btn-generic margin-right-auto margin-left-auto margin-bottom-30px animate fadeInUp"><!-- BOTÃO PARA VER TODOS OS PRATOS -->
                <span>Ver Todos</span>
            </div>
        </article>
		<section id="app-section" class="animate fadeInUp"><!-- CONTAINER-MÃE PARA BAIXAR O APP -->
			<div id="app-section-content"><!-- CONTAINER-FILHO PARA BAIXAR O APP -->
				<h2 class="padding-bottom-15px">Baixe nosso aplicativo!</h2><!-- TÍTULO DA SESSÃO -->
				<div id="app-section-separator" class="margin-bottom-15px"></div><!--SEPARADOR -->
				<p class="padding-bottom-15px">Controle as suas dietas e encomendas semanais pelo aplicativo para Android! Baixe agora e mantenha sua saúde em dia!</p><!-- DESCRIÇÃO DA SESSÃO -->
				<div class="btn-generic margin-auto animate fadeInUp" onclick="javascript:location.href='app.php'"><!-- BOTÃO GENÉRICO -->
					<span>Detalhes</span>
				</div>
			</div>
			<figure id="app-section-image"><!-- CONTAINER DE IMAGENS -->
				<img src="assets/images/backgrounds/fade1.png" alt="Notificar-me"><!-- IMAGEM MOCKUP -->
			</figure>
		</section>
		<article id="success-cases-section"><!-- CONTAINER-MÃE DO CASOS DE SUCESSO -->
			<div id="success-cases-content" class="animate fadeInUp"><!-- CONTAINER-FILHO DO CASOS DE SUCESSO -->
				<h2 class="padding-top-60px padding-left-30px padding-bottom-15px">Casos de Sucesso</h2><!-- TÍTULO DA SESSÃO -->

				<p class="padding-left-30px padding-bottom-15px">Conheça as histórias das pessoas que utilizaram<br>nosso serviço e degustaram dos nossos produtos!</p><!-- DESCRIÇÃO DA SESSÃO -->

				<div class="btn-generic margin-left-30px margin-bottom-60px" onclick="javascript:location.href='casos-de-sucesso.php'"><!-- BOTÃO GENÉRICO -->
					<span>Ver Mais</span>
				</div>
			</div>
		</article>
	</section>
	<?php require_once("components/footer.html"); ?><!-- RODAPÉ VIA PHP -->
</body>
</html>
