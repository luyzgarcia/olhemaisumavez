<?php

defined('_JEXEC') or die('Acesso restrito');

?>
<?php echo $this->loadTemplate('head'); ?>

<div class="container painel">
	<div class="row">
		<?php echo $this->loadTemplate('menu'); ?>
		<div class="span8 painel_principal">
			<h2>Dados Pessoais:</h2>
			<hr class="linha_azul"/>
			<h3>Nome:&nbsp<?php echo $this->dadoscliente->nome_completo; ?></h3>
			<h3>Nome de usuário:&nbsp<?php echo $this->dadoscliente->username; ?></h3>
			<h3>Telefone:&nbsp<?php echo $this->dadoscliente->telefone; ?></h3>
			<h3>Email:&nbsp<?php echo $this->dadoscliente->email; ?></h3>
			<br/>
			<h2>Dados para entrega:</h2>
			<hr class="linha_azul"/>
			<h3>CEP:&nbsp<?php echo $this->dadoscliente->cep; ?></h3>
			<h3>Endereço:&nbsp<?php echo $this->dadoscliente->endereco; ?></h3>
			<h3>Numero:&nbsp<?php echo $this->dadoscliente->numero; ?></h3>
			<h3>Bairro:&nbsp<?php echo $this->dadoscliente->bairro; ?></h3>
			<h3>Cidade:&nbsp<?php echo $this->dadoscliente->cidade; ?></h3>
			<h3>Estado:&nbsp<?php echo $this->dadoscliente->estado; ?></h3>
			<div class="bt_alterar">
				<a href="<?php echo JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=editar&user_id='.(int) $this->dadoscliente->id_joomla);?>" class="bt_padrao">Alterar dados</a>
			</div>
		</div>
	</div>
</div>