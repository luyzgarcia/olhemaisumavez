<?php

defined('_JEXEC') or die('Acesso restrito');

?>
<?php print_r($this->dadospedidorealizado); ?>
<div class="container livros carrinho">
	<div class="row">
		<div class="span12">
			<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/carrinho.png" alt="" />
			<h2>LOJA</h2><h1>></h1><h3>Pedido realizado</h3><jdoc:include type="menu_interno" />
			<hr />
			<jdoc:include type="finalizar_pedido" />
		</div>
		<div class=" span12 confirmacaopedido">
		<h2>Seu pedido foi realizado com sucesso, estamos apenas aguardando a realização do pagamento:</h2>
			<h3>Número do pedido:&nbsp<?php echo $this->dadospedidorealizado['id']; ?></h3>
			<h2>Seu pedido será entregue no seguinte endereço:</h2>
			<hr class="linha_azul" />
			<h3>CEP:&nbsp<?php echo $this->dadospedidorealizado['cep_entrega']; ?></h3>
			<h3>Endereço:&nbsp<?php echo $this->dadospedidorealizado['endereco_entrega']; ?></h3>
			<h3>Numero:&nbsp<?php echo $this->dadospedidorealizado['numero_entrega']; ?></h3>
			<h3>Bairro:&nbsp<?php echo $this->dadospedidorealizado['bairro_entrega']; ?></h3>
			<h3>Cidade:&nbsp<?php echo $this->dadospedidorealizado['cidade_entrega']; ?></h3>
			<h3>Estado:&nbsp<?php echo $this->dadospedidorealizado['estado_entrega']; ?></h3>
			
		</div>
		<div class="span12 bt_carrinho">
			<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.realizarPagamento'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
				
				<input type="submit" value="Realizar pagamento" class="bt_padrao"/>
			</form>
		</div>
	</div>
</div>