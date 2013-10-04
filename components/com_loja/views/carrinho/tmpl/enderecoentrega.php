<?php

defined('_JEXEC') or die('Acesso restrito');

?>

<div class="container livros carrinho">
	<div class="row">
		<div class="span12">
			<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/carrinho.png" alt="" />
			<h2>LOJA</h2><h1>></h1><h3>Endereço de entrega</h3><jdoc:include type="menu_interno" />
			<hr />
			<jdoc:include type="finalizar_pedido" />
		</div>
	</div>
</div>
<div class="container livros enderecoentrega">
	<div class="row">
		<div class="span6">
			<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.finalizarEnderecoPadrao'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
				<h3>Entregar nesse endereço:</h3>
				<div class="endereco1">
					<h3>CEP:&nbsp<?php echo $this->dadoscliente->cep; ?></h3>
					<h3>Endereço:&nbsp<?php echo $this->dadoscliente->endereco; ?></h3>
					<h3>Numero:&nbsp<?php echo $this->dadoscliente->numero; ?></h3>
					<h3>Bairro:&nbsp<?php echo $this->dadoscliente->bairro; ?></h3>
					<h3>Cidade:&nbsp<?php echo $this->dadoscliente->cidade; ?></h3>
					<h3>Estado:&nbsp<?php echo $this->dadoscliente->estado; ?></h3>
					
				</div>				
				<div class="bt_carrinho">
					<input type="hidden" name="option" value="com_loja" />
					<input type="hidden" name="task" value="carrinho.finalizarEnderecoPadrao" />
					<?php echo JHtml::_('form.token');?>
					<input type="submit" value="Entregar nesse endereço" class="bt_padrao" />
				</div>				
			</form>
		</div>
		<!--<div class="span6">
			<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=carrinho.finalizarEnderecoAlternativo'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
				<h3>Não, entregar nesse endereço:</h3>
				<div class="endereco2">
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_cep" class="required invalid" >CEP:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<input type="text" name="cadastro[cep]" id="cadastro_cep" 
							value="<?php if(isset($this->data->cep)) { echo JText::_($this->data->cep);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 100px;">					
						</div>
					</div>
					
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_endereco" class="required invalid" >Endereço:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<input type="text" name="cadastro[endereco]" id="cadastro_endereco" 
								value="<?php if(isset($this->data->endereco)) { echo JText::_($this->data->endereco);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 280px;">					
						</div>
					</div>
					
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_numero" class="required invalid" >Numero:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<input type="text" name="cadastro[numero]" id="cadastro_numero" 
							value="<?php if(isset($this->data->numero)) { echo JText::_($this->data->numero);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 50px;">					
						</div>
					</div>
					
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_bairro" class="required invalid" >Bairro:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<input type="text" name="cadastro[bairro]" id="cadastro_bairro" 
							value="<?php if(isset($this->data->bairro)) { echo JText::_($this->data->bairro);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
						</div>
					</div>
					
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_cidade" class="required invalid" >Cidade:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<input type="text" name="cadastro[cidade]" id="cadastro_cidade" 
								value="<?php if(isset($this->data->cidade)) { echo JText::_($this->data->cidade);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
						</div>
					</div>
					
					<div class="control-group">
						<div class="control-label">
							<label for="cadastro_estado" class="required invalid" >Estado:<span class="star">&nbsp;*</span></label>			
						</div>
						<div class="controls">
							<select name="cadastro[estado]" id="cadastro_estado">
								<option value="">Estado</option>
								<option value="AL">Alagoas</option>
								<option value="AP" <?php if(isset($this->data->estado) && ($this->data->estado == 'AP')) { echo 'selected';} ?>>Amapá</option>
								<option value="AM" <?php if(isset($this->data->estado) && ($this->data->estado == 'AM')) { echo 'selected';} ?>>Amazonas</option>
								<option value="BA" <?php if(isset($this->data->estado) && ($this->data->estado == 'BA')) { echo 'selected';} ?>>Bahia</option>
								<option value="CE" <?php if(isset($this->data->estado) && ($this->data->estado == 'CE')) { echo 'selected';} ?>>Ceará</option>
								<option value="DF" <?php if(isset($this->data->estado) && ($this->data->estado == 'DF')) { echo 'selected';} ?>>Distrito Federal</option>
								<option value="GO" <?php if(isset($this->data->estado) && ($this->data->estado == 'GO')) { echo 'selected';} ?>>Goiás</option>
								<option value="ES" <?php if(isset($this->data->estado) && ($this->data->estado == 'ES')) { echo 'selected';} ?>>Espírito Santo</option>
								<option value="MA" <?php if(isset($this->data->estado) && ($this->data->estado == 'MA')) { echo 'selected';} ?>>Maranhão</option>
								<option value="MT" <?php if(isset($this->data->estado) && ($this->data->estado == 'MT')) { echo 'selected';} ?>>Mato Grosso</option>
								<option value="MS" <?php if(isset($this->data->estado) && ($this->data->estado == 'MS')) { echo 'selected';} ?>>Mato Grosso do Sul</option>
								<option value="MG" <?php if(isset($this->data->estado) && ($this->data->estado == 'MG')) { echo 'selected';} ?>>Minas Gerais</option>
								<option value="PA" <?php if(isset($this->data->estado) && ($this->data->estado == 'PA')) { echo 'selected';} ?>>Pará</option>
								<option value="PB" <?php if(isset($this->data->estado) && ($this->data->estado == 'PB')) { echo 'selected';} ?>>Paraiba</option>
								<option value="PR" <?php if(isset($this->data->estado) && ($this->data->estado == 'PR')) { echo 'selected';} ?>>Paraná</option>
								<option value="PE" <?php if(isset($this->data->estado) && ($this->data->estado == 'PE')) { echo 'selected';} ?>>Pernambuco</option>
								<option value="PI" <?php if(isset($this->data->estado) && ($this->data->estado == 'PI')) { echo 'selected';} ?>>Piauí­</option>
								<option value="RJ" <?php if(isset($this->data->estado) && ($this->data->estado == 'RJ')) { echo 'selected';} ?>>Rio de Janeiro</option>
								<option value="RN" <?php if(isset($this->data->estado) && ($this->data->estado == 'RN')) { echo 'selected';} ?>>Rio Grande do Norte</option>
								<option value="RS" <?php if(isset($this->data->estado) && ($this->data->estado == 'RS')) { echo 'selected';} ?>>Rio Grande do Sul</option>
								<option value="RO" <?php if(isset($this->data->estado) && ($this->data->estado == 'RO')) { echo 'selected';} ?>>Rondônia</option>
								<option value="RR" <?php if(isset($this->data->estado) && ($this->data->estado == 'RR')) { echo 'selected';} ?>>Roraima</option>
								<option value="SP" <?php if(isset($this->data->estado) && ($this->data->estado == 'SP')) { echo 'selected';} ?>>São Paulo</option>
								<option value="SC" <?php if(isset($this->data->estado) && ($this->data->estado == 'SC')) { echo 'selected';} ?>>Santa Catarina</option>
								<option value="SE" <?php if(isset($this->data->estado) && ($this->data->estado == 'SE')) { echo 'selected';} ?>>Sergipe</option>
								<option value="TO" <?php if(isset($this->data->estado) && ($this->data->estado == 'TO')) { echo 'selected';} ?>>Tocantins</option>							
							</select>		
						</div>
					</div>
				</div>
				<div class="bt_carrinho">
					<input type="submit" value="Entregar nesse endereço" class="bt_padrao" />
				</div>
			</form>
		</div>-->
		<div class="span12">
			<a href="<?php echo JRoute::_('index.php?option=com_loja&view=carrinho'); ?>" class="bt_padrao">Voltar</a>
		</div>
	</div>
</div>