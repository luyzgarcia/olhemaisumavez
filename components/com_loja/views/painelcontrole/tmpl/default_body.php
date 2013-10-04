<?php

defined('_JEXEC') or die('Acesso restrito');

?>


<div class="container painel">
	<div class="row">
		<?php echo $this->loadTemplate('menu'); ?>
		<div class="span8 painel_principal">
			<h2>Olá, <?php echo $this->user->name; ?>!</h2>
			<h3>Seja bem-vindo a sua área no Olhe mais uma vez!</h3>
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