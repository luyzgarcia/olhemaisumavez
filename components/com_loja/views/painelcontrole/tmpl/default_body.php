<?php

defined('_JEXEC') or die('Acesso restrito');

?>


<div class="container painel">
	<div class="row">
		<?php echo $this->loadTemplate('menu'); ?>
		<div class="span8 painel_principal">
			<h2>Olá, <?php echo $this->user->name; ?>!</h2>
			<h3>Seja bem-vindo a sua área no Olhe mais uma vez!</h3>
			
			<br/><br/>
			<div class="pedidos_andamento_principal">
				<h3>PEDIDOS EM ANDAMENTO</h3>
				<?php foreach ($this->pedidosAndamento as $key => $value) { ?>
					<div class="pedido">
						<h2>COD <?php echo '00'.$value->id ?> - Realizado em <?php echo date('d-m-Y',strtotime($value->data_criacao)); ?> - 
						<span><?php if($value->status == 'AGP') { echo 'Aguardando pagamento';} ?></span></h2>
						<h3><a href="#">Realizar pagamento</a></h3>
					</div>
				<?php 
					if(prev($this->pedidosAndamento)){ ?>
						<hr class="linha_branca" />
					<? } 
				
				} ?>
				
			</div>
		</div>
	</div>
</div>

<!--<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.logout'); ?>" method="post" class="form-horizontal">
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="bt_padrao"><span class="icon-arrow-left icon-white"></span> <?php echo JText::_('JLOGOUT'); ?></button>
		</div>
	</div>
	<?php echo JHtml::_('form.token'); ?>
</form>-->