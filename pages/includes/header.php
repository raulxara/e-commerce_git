<!DOCTYPE html>
<html>
<head>
	<title>EcomPlug</title>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts-6/css/all.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css3/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="e-commerce, loja digital">
	<meta name="description" content="o futuro é na internet e esta cada vez melhor comprar sem sair de casa">
	<meta name="author" content="Raul Nascimento Cruz">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	

</head>
<body>
	<base base="<?php echo INCLUDE_PATH; ?>" />

<div class="faixa-header">
	<div class="clear"></div>
</div>

<header>
	<div class="container">
		<div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">EcomPlug</a></div>
		<nav class="desketop right">
			<li><a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i> (<?php echo \models\homeModel::getTotalItemsCarrinho(); ?>)</a></li>
			<li><a href="<?php echo INCLUDE_PATH ?>finalizar"><i class="fa-solid fa-bag-shopping"></i> Finalizar Pedido</a></li>
		</nav>
	<div class="clear"></div>
	</div>
</header>