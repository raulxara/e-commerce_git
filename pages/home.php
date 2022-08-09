<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/0001.jpg');" class="banner-single"></div>
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/0003.jpg');" class="banner-single"></div>
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>images/0002.jpg');" class="banner-single"></div>
	<div class="overlay"></div>
	<div class="bullets">
	</div>
</section>

<section class="chamada-escolher">
	<div class="container">
		<h2>Seu desejo com escolhas!</h2>
	</div>
	<div class="clear"></div>
</section>

<section class="vantagens-home">
	<div class="center">
		<div class="w20 left box-especialidade">
			<h3><i class="fa-solid fa-percent"></i></h3>
			<p>Ofertas de até 70%</p>
		</div>
		<div class="w20 left box-especialidade">
			<h3><i class="fa-solid fa-gift"></i></h3>
			<p>Presentes favorito</p>
		</div>
		<div class="w20 left box-especialidade">
			<h3><i class="fa-solid fa-truck-fast"></i></h3>
			<p>Ofertas com frete grátis</p> 
		</div>
		<div class="w20 left box-especialidade">
			<h3><i class="fa-solid fa-bag-shopping"></i></h3>
			<p>Combos de produtos</p>
		</div>
		<div class="w20 left box-especialidade">
			<h3><i class="fa-regular fa-circle-check"></i></h3>
			<p>Selo de qualidade</p>
		</div>
		<div class="clear"></div>
	</div>
</section>

<div class=" lista-items">
	<div class="container">
		<?php  
			$items = \models\homeModel::getLojaItems();
			foreach ($items as $key => $value) {
			$imagem = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque_imagens` WHERE produto_id = $value[id]");
			$imagem->execute();
			$imagem = $imagem->fetch()['imagem'];
		?>
		<div class=" produto-single-box">
			<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $imagem; ?>">
			<p>R$ <?php echo Painel::convertMoney($value['preco']) ?></p>
			<h1><i class="fa-solid fa-bolt-lightning"></i> Frete grátis</h1>
			<h2><?php echo $value['nome'] ?></h2>
			<a  href="<?php echo INCLUDE_PATH ?>?addCart=<?php echo $value['id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adicionar</a>
		</div>
		<?php } ?>
		<div class="clear"></div>
	</div>
</div>