<?php

defined('_JEXEC') or die('Acesso restrito');

?>
<?php echo $this->loadTemplate('head'); ?>

<div class="container painel">
	<div class="row">
		<?php echo $this->loadTemplate('menu'); ?>
		<div class="span8 painel_principal">
			<h2>Editar dados Pessoais:</h2>
			<hr class="linha_azul"/>
			<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=painelcontrole.editar'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_nome_completo" class="required invalid" >Nome completo:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[nome_completo]" id="cadastro_nome_completo" 
							value="<?php if(isset($this->dadoseditar->nome_completo)) { echo JText::_($this->dadoseditar->nome_completo);} ?>" class="validate required invalid" size="50" 
							required="required" aria-required="true" aria-invalid="true" style="width: 270px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_cpf" class="required invalid" >CPF:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[cpf]" id="cadastro_cpf" 
						value="<?php if(isset($this->dadoseditar->cpf)) { echo JText::_($this->dadoseditar->cpf);} ?>" class="validate required invalid" size="30" required="required" 
						aria-required="true" aria-invalid="true" style="width: 130px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_telefone" class="required invalid" >Telefone:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[telefone]" id="cadastro_telefone" 
						value="<?php if(isset($this->dadoseditar->telefone)) { echo JText::_($this->dadoseditar->telefone);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
						aria-invalid="true" style="width: 130px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_email" class="required invalid" >Email:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[email]" id="cadastro_email" 
						value="<?php if(isset($this->dadoseditar->email)) { echo JText::_($this->dadoseditar->email);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
						aria-invalid="true" style="width: 230px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_username" class="required invalid" >Nome de usuário:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[username]" id="cadastro_username" 
						value="<?php if(isset($this->dadoseditar->username)) { echo JText::_($this->dadoseditar->username);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
						aria-invalid="true" style="width: 130px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_senha" class="required invalid" >Senha:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="password" name="cadastro[senha]" id="cadastro_senha" 
						class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_senha2" class="required invalid" >Confirmar senha:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="password" name="cadastro[senha2]" id="cadastro_senha2" value="" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
					</div>
				</div>
				<br/>
				<h2>Editar dados para entrega:</h2>
				<hr class="linha_azul"/>
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_cep" class="required invalid" >CEP:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[cep]" id="cadastro_cep" 
						value="<?php if(isset($this->dadoseditar->cep)) { echo JText::_($this->dadoseditar->cep);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 100px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_endereco" class="required invalid" >Endereço:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[endereco]" id="cadastro_endereco" 
							value="<?php if(isset($this->dadoseditar->endereco)) { echo JText::_($this->dadoseditar->endereco);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 280px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_numero" class="required invalid" >Numero:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[numero]" id="cadastro_numero" 
						value="<?php if(isset($this->dadoseditar->numero)) { echo JText::_($this->dadoseditar->numero);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true" style="width: 50px;">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_bairro" class="required invalid" >Bairro:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[bairro]" id="cadastro_bairro" 
						value="<?php if(isset($this->dadoseditar->bairro)) { echo JText::_($this->dadoseditar->bairro);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_cidade" class="required invalid" >Cidade:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<input type="text" name="cadastro[cidade]" id="cadastro_cidade" 
							value="<?php if(isset($this->dadoseditar->cidade)) { echo JText::_($this->dadoseditar->cidade);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" aria-invalid="true">					
					</div>
				</div>
				
				<div class="control-group">
					<div class="control-label">
						<label for="cadastro_estado" class="required invalid" >Estado:<span class="star">&nbsp;*</span></label>			
					</div>
					<div class="controls">
						<select name="cadastro[estado]" id="cadastro_estado">
							<option value="">Estado</option>
							<option value="AL" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'AL')) { echo 'selected';} ?>>Alagoas</option>
							<option value="AP" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'AP')) { echo 'selected';} ?>>Amapá</option>
							<option value="AM" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'AM')) { echo 'selected';} ?>>Amazonas</option>
							<option value="BA" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'BA')) { echo 'selected';} ?>>Bahia</option>
							<option value="CE" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'CE')) { echo 'selected';} ?>>Ceará</option>
							<option value="DF" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'DF')) { echo 'selected';} ?>>Distrito Federal</option>
							<option value="GO" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'GO')) { echo 'selected';} ?>>Goiás</option>
							<option value="ES" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'ES')) { echo 'selected';} ?>>Espírito Santo</option>
							<option value="MA" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'MA')) { echo 'selected';} ?>>Maranhão</option>
							<option value="MT" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'MT')) { echo 'selected';} ?>>Mato Grosso</option>
							<option value="MS" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'MS')) { echo 'selected';} ?>>Mato Grosso do Sul</option>
							<option value="MG" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'MG')) { echo 'selected';} ?>>Minas Gerais</option>
							<option value="PA" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'PA')) { echo 'selected';} ?>>Pará</option>
							<option value="PB" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'PB')) { echo 'selected';} ?>>Paraiba</option>
							<option value="PR" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'PR')) { echo 'selected';} ?>>Paraná</option>
							<option value="PE" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'PE')) { echo 'selected';} ?>>Pernambuco</option>
							<option value="PI" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'PI')) { echo 'selected';} ?>>Piauí­</option>
							<option value="RJ" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'RJ')) { echo 'selected';} ?>>Rio de Janeiro</option>
							<option value="RN" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'RN')) { echo 'selected';} ?>>Rio Grande do Norte</option>
							<option value="RS" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'RS')) { echo 'selected';} ?>>Rio Grande do Sul</option>
							<option value="RO" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'RO')) { echo 'selected';} ?>>Rondônia</option>
							<option value="RR" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'RR')) { echo 'selected';} ?>>Roraima</option>
							<option value="SP" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'SP')) { echo 'selected';} ?>>São Paulo</option>
							<option value="SC" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'SC')) { echo 'selected';} ?>>Santa Catarina</option>
							<option value="SE" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'SE')) { echo 'selected';} ?>>Sergipe</option>
							<option value="TO" <?php if(isset($this->dadoseditar->estado) && ($this->dadoseditar->estado == 'TO')) { echo 'selected';} ?>>Tocantins</option>							
						</select>		
					</div>
				</div>
				<div class="bt_alterar">
					<a href="<?php echo JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=dadosconta');?>" class="bt_padrao">Cancelar</a>
					<input type="hidden" name="cadastro[id]" value="<?php echo $this->dadoseditar->id; ?>" />
					<button type="submit" class="validate bt_padrao">Salvar</button>
					<input type="hidden" name="option" value="com_loja" />
					<input type="hidden" name="task" value="painelcontrole.editar" />
					<?php echo JHtml::_('form.token');?>
				</div>
			</form>
		</div>
	</div>
</div>