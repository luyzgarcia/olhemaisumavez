<?php

defined('_JEXEC') or die('Acesso restrito');

?>

<div class="carrinho_livros">
	<div class="container">
	<?php if(!empty($this->carrinho)) { ?>
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
				<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.removerItem'); ?>" class="removeritem">
					<input type="hidden" name="id" value="<?php echo $value->id; ?>" />
					<input type="submit" value="Remover item" />
				</form>
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
					<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.aumentarQuantidade'); ?>">
						<input type="hidden" name="id" value="<?php echo $value->id; ?>" />
						<input type="submit" value="+1" />
					</form>
					<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.diminuirQuantidade'); ?>">
						<input type="hidden" name="id" value="<?php echo $value->id; ?>" />
						<input type="submit" value="-1" />
					</form>
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
			<?php }else { ?>
				<h3>Seu carrinho está vazio</h3>
			<?php } ?>
	</div>
</div>
<hr class="linha_azul" />
<div class="carrinho_livros">
	<div class="container">
		<div class="frete_wrapper">
			<div class="row">
				<div class="span6">
					<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.calcularFrete'); ?>">
						<input type="text" name="cep"  id="cep"  value="<?php echo $this->cep1; ?>" maxlength="5" size="5" /> - 
						<input type="text" name="cep2" id="cep2" value="<?php echo $this->cep2; ?>" maxlength="3" size="3" />
						<input type="submit" name="" value="CALCULAR FRETE" onclick="if($('#cep').val()=='') {$('#cep').focus();return false;}else if($('#cep2').val()=='') {$('#cep2').focus();return false;}" />
					
					</form>
				</div>
				<div class="span6">
					<h3>Valor do frete</h3>
					<h4>R$ <?php echo money_format('%i', $this->valorFrete)?></h4>
				</div>
			</div>
		</div>
	
	</div>
</div>
<hr class="linha_azul"/>
<div class="carrinho_total">
	<div class="container">
		<div class="row-fluid">
			<div class="span9">
				&nbsp
			</div>
			
			<div class="span3">
				<h3>VALOR TOTAL DO PEDIDO</h3>
				<h2>R$<?php echo money_format('%i', $this->totalPedido)?></h2>
				<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.finalizarPedido'); ?>">
					<input type="hidden" name="option" value="com_loja" />
					<input type="hidden" name="task" value="carrinho.finalizarPedido" />
					<?php echo JHtml::_('form.token');?>
					<input type="submit" value="FINALIZAR PEDIDO" class="bt_padrao"/>
				</form>
			</div>
			
		</div>
	</div>
</div>