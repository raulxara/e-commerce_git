<div class="chamada-escolher">
	<div class="container">
		<h2>Caixa | Já é quase seu!</h2>
	<div class="clear"></div>
	</div>
</div>

<div class="tabela-pedidos">
	<div class="container">
		<h2><i class="fa-solid fa-store"></i> Pedidos</h2>
		<table>
			<tr>
				<th>Nome do produto</th>
				<th>Quatidade</th>
				<th>Valor</th>
			</tr>
			<?php
				$itemsCarrinho = $_SESSION['carrinho'];
				$total = 0;
				foreach ($itemsCarrinho as $key => $value) {
				$idProduto = $key;
				$produto = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.estoque` WHERE id = $idProduto");
				$produto->execute();
				$produto = $produto->fetch();
				$valor = $value * $produto['preco'];
				$total+=$valor;
			?>
			<tr>
				<td><?php echo $produto['nome']; ?></td>
				<td><?php echo $value; ?></td>
				<td>R$ <?php echo Painel::convertMoney($valor); ?></td>
			</tr>

			<?php } ?>
		</table>
		<div class="clear"></div>
	</div>
	
</div>

<div class="finalizar-pedido">
	<div class="container">
		<h2>Total: R$ <?php echo Painel::convertMoney($total); ?></h2>
		<div class="clear"></div>
		<a href="" class="btn-pagamento"> Fazer pedido</a>
	<div class="clear"></div>
	</div>
</div>