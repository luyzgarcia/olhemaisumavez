<?php

defined('_JEXEC') or die('Acesso restrito');

?>
<div class="container livros carrinho">
	<div class="row">
		<div class="span12">
			<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/carrinho.png" alt="" />
			<h2>LOJA</h2><h1>></h1><h3>Confirmação do pedido</h3><jdoc:include type="menu_interno" />
			<hr />
			<jdoc:include type="finalizar_pedido" />
		</div>
		<div>
			<div class="row-fluid cabecalho">
				<div class="span2 ">
					Codigo do produto
				</div>
				<div class="span4">
					Descriçao do produto
				</div>
				<div class="span2">
					Quantidade do produto
				</div>
				<div class="span2">
					preço do produto
				</div>
				<div class="span2">
					Valor total do item
				</div>
			</div>	
				
				
			<?php foreach ($this->carrinho as $key => $value) { ?>
			<style>
				
			</style>
			<div class="row-fluid col-wrap">	
				<div class="span2 carrinho_fundo col">
					<div class="carrinho_texto">
						00<?php echo $value->id; ?>
					</div>
				</div>
				<div class="span4 col">
					<div class="img_desc">
						<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/capa_livro.png" alt="" />
						<div class="carrinho_desc">
							<p>
								<?php echo $value->titulo; ?>
							</p>
							<p>
								Autores
							</p>
						</div>
					</div>
				</div>
				<div class="span2 carrinho_fundo col">
					<div class="carrinho_texto">
						<h4><?php echo $value->quantidade; ?></h4>
					</div>
				</div>
				<div class="span2 col">
					<div class="carrinho_texto preco_item">
						R$ <?php echo money_format('%i', $value->valor); ?>
					</div>
				</div>
				<div class="span2 carrinho_fundo col">
					<div class="carrinho_texto">
						R$ <?php echo money_format('%i', $value->quantidade*$value->valor); ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<hr class="linha_azul">
		<script type="text/javascript">
			$(function() {
				$('.tipo_frete').change(function() {
					valor = $(this).data('valor');
					$('#valor_frete').text('R$'+valor);
					subtotal = $('#valor_subtotal').data('valor');
					valor = valor.replace(',','.');
					$('#valor_total').text('R$'+(parseFloat(valor)+subtotal).toFixed(2));
				});
			});
			
		</script>
		<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.confirmarPedido'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
			<div class="row-fluid confirma_pedido_total">
				<div class="span3">
					<h4>Selecione o tipo de frete</h4>
					<h3><input type="radio" name="pedido[tipo_frete]" class="tipo_frete" value="0" data-valor='<?php echo $this->dadospedido->valorfrete->pac; ?>'  />PAC: <?php echo $this->dadospedido->valorfrete->pac; ?></h3>
					<h3><input type="radio" name="pedido[tipo_frete]" class="tipo_frete" value="1" data-valor='<?php echo $this->dadospedido->valorfrete->sedex; ?>'  />Sedex: <?php echo $this->dadospedido->valorfrete->sedex; ?></h3>
				</div>
				<div class="span3">
					<h4>Valor do frete:</h4>
					<h3 id="valor_frete"></h3>
				</div>
				<div class="span3">
					<h4>Valor dos itens:</h4>
					<h3 id="valor_subtotal" data-valor="<?php echo $this->dadospedido->valorsubtotal ?>">R$<?php echo money_format('%i', $this->dadospedido->valorsubtotal)?></h3>
				</div>
				<div class="span3">
					<h4>Valor total:</h4>
					<h3 id="valor_total"></h3>
				</div>
			</div>
			<hr class="linha_azul">
			<div class="span2">
				<a href="<?php echo JRoute::_('index.php?option=com_loja&view=carrinho&layout=enderecoentrega'); ?>" class="bt_padrao">Voltar</a>
			</div>
			<div class="bt_carrinho">
				<input type="hidden" name="option" value="com_loja" />
				<input type="hidden" name="task" value="carrinho.confirmarPedido" />
				<?php echo JHtml::_('form.token');?>
				<input type="submit" value="Confirmar pedido" class="bt_padrao" onclick="if($('.confirma_pedido_total input[type=radio]:checked').length==0){alert('Selecione um tipo de frete');return false;}"/>
			</div>				
		</form>
	</div>
</div>