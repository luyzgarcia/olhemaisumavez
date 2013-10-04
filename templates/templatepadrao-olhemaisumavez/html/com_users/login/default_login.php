<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.5
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

?>
<div class="container login form_cadastro">
	<div class="row">
		<div class="divlogin1 span6">
			<h4>Log-in</h4>
			<div class="sub-divlogin1">
			
			
			<!--
			<div class="control-group">
				<div class="control-label">
					<label for="cadastro_nome_completo" class="required invalid">Nome completo:<span class="star">&nbsp;*</span></label>			
				</div>
				<div class="controls">
					<input type="text" name="cadastro[nome_completo]" id="cadastro_nome_completo" value="" class="validate required invalid" size="50" required="required" aria-required="true" aria-invalid="true" style="width: 270px;">					
				</div>
			</div>
			
			-->
			
			
			
			
				<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post">
						<div class="control-group">
							<div class="control-label">
								<label for="username" class="required invalid">Usuário<span class="star"></span></label>			
							</div>
							<div class="controls">
								<input type="text" name="username" placeholder="Nome de Usuário" id="username" value="" class="validate-username" size="25">				
							</div>
						</div>
						<div class="control-group">
							<div class="control-label">
								<label for="username" class="required invalid">Senha<span class="star"></span></label>			
							</div>
							<div class="controls">
								<input type="password" name="password" placeholder="Senha" id="password" value="" class="validate-password" size="25">				
							</div>
						</div>
						
						
						<div class="btlogin">
							<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
								<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
							<button type="submit" class="bt_padrao">Entrar</button>
							<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
						</div>
						<?php echo JHtml::_('form.token'); ?>
				</form>
				
			</div>
			
		</div>

		<div class="divlogin2 span6">
			<h2>OLHE MAIS UMA VEZ!</h3>
			
			<h3>Existe um mundo de possibilidades e que você pode explorar!</h3>
			
			<p>Cadastre gratuitamente no site para poder comprar e receber atualizações sobre nossos produtos e eventos.</p>
			
			<div class="login2bt">
				<div class="btcadastro">
					<a href="<?php echo JRoute::_('index.php?option=com_loja&view=cadastro'); ?>">
								CADASTRE-SE</a>
				</div>
			</div>
		</div>
	</div>
</div>