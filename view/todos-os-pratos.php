<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todos os Pratos - Food 4Fit</title>
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
	<style>
		.dishs-block{
			width: 100%;
			height: auto;
			display: flex;
		}
		.filter-dishs{
			width: 100%;
			max-width: 320px;
			height: auto;
			background: #a6a6a6;
		}
		.dishs-wrapper{
			width: 100%;
			max-width: 100%;
			height: auto;
		}
	</style>
</head>
<body>
	<?php require_once("components/navbar.html"); ?>
	<div class="dishs-block">
		<aside class="filter-dishs">

		</aside>
		<div class="dishs-wrapper">
			<div class="generic-grid animate fadeInUp">
				<?php 
					require_once("../controller/PratoController.class.php");
					$pratos = PratoController::listar();
					foreach ($pratos as $p) {
				?>
				<div class="generic-card">
					<img src="<?= $p->getFoto() ?>" alt="Teste" class="generic-card-img">
					<div class="generic-card-overlay">
						<span class="card-dish-name margin-bottom-15px"><?= $p->getTitulo() ?></span>
						<div class="card-dish-separator margin-bottom-15px"></div>
						<p class="card-dish-description margin-bottom-30px"><?= $p->getResumo() ?></p>
						<div class="card-dish-price margin-bottom-30px"><!-- CONTAINER DO PREÇO DO PRATO NA INDEX -->
							<span class="padding-right-15px">R$ <?= $p->getPreco() ?></span><!-- PREÇO -->
							<div><img src="assets/images/simbols/delivery-truck.svg" alt="Compra Rápida"></div><!-- COMPRA RAPIDA -->
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="margin-right-auto margin-left-auto margin-bottom-30px btn-generic" id="see-more">
				<span>Ver Mais</span>
			</div>
		</div>
	</div>
	<?php require_once("components/footer.html"); ?>
</body>
</html>
