<?php

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>
<div class="container loja_cadastro">
	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_loja&task=cadastro.realizarCadastro'); ?>" method="post" class="form-validate form-horizontal"name="adminForm" enctype="multipart/form-data">
		<div class="control-group">
			<div class="control-label">
				<label for="cadastro_nome_completo" class="required invalid" >Nome completo:<span class="star">&nbsp;*</span></label>			
			</div>
			<div class="controls">
				<input type="text" name="cadastro[nome_completo]" id="cadastro_nome_completo" 
					value="<?php if(isset($this->data->nome_completo)) { echo JText::_($this->data->nome_completo);} ?>" class="validate required invalid" size="50" 
					required="required" aria-required="true" aria-invalid="true" style="width: 270px;">					
			</div>
		</div>
		
		<div class="control-group">
			<div class="control-label">
				<label for="cadastro_cpf" class="required invalid" >CPF:<span class="star">&nbsp;*</span></label>			
			</div>
			<div class="controls">
				<input type="text" name="cadastro[cpf]" id="cadastro_cpf" 
				value="<?php if(isset($this->data->cpf)) { echo JText::_($this->data->cpf);} ?>" class="validate required invalid" size="30" required="required" 
				aria-required="true" aria-invalid="true" style="width: 130px;">					
			</div>
		</div>
		
		<div class="control-group">
			<div class="control-label">
				<label for="cadastro_telefone" class="required invalid" >Telefone:<span class="star">&nbsp;*</span></label>			
			</div>
			<div class="controls">
				<input type="text" name="cadastro[telefone]" id="cadastro_telefone" 
				value="<?php if(isset($this->data->telefone)) { echo JText::_($this->data->telefone);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
				aria-invalid="true" style="width: 130px;">					
			</div>
		</div>
		
		<div class="control-group">
			<div class="control-label">
				<label for="cadastro_email" class="required invalid" >Email:<span class="star">&nbsp;*</span></label>			
			</div>
			<div class="controls">
				<input type="text" name="cadastro[email]" id="cadastro_email" 
				value="<?php if(isset($this->data->email)) { echo JText::_($this->data->email);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
				aria-invalid="true" style="width: 230px;">					
			</div>
		</div>
		
		<div class="control-group">
			<div class="control-label">
				<label for="cadastro_username" class="required invalid" >Nome de usuário:<span class="star">&nbsp;*</span></label>			
			</div>
			<div class="controls">
				<input type="text" name="cadastro[username]" id="cadastro_username" 
				value="<?php if(isset($this->data->username)) { echo JText::_($this->data->username);} ?>" class="validate required invalid" size="30" required="required" aria-required="true" 
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
		
		<?php echo $this->loadTemplate('head_endereco'); ?>
		
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
		
		<div class="">
			<button type="submit" class="validate bt_padrao">Registrar</button>
			<a class="bt_padrao" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
			<input type="hidden" name="option" value="com_loja" />
			<input type="hidden" name="task" value="cadastro.realizarCadastro" />
			<?php echo JHtml::_('form.token');?>
		</div>
		
		
	</form>
</div>

<!--<div class="livro_fundo0 livro">
	<div class="container" style="position:relative ;">
		<div class="span3">
			<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/capa_livro.png" alt="" />
			<h2>Ficha técnica</h2>
			<hr />
			<div class="ficha_livro">
				<h3>Editora:</h3><h4>Rocco</h4>
			</div>
			<div class="ficha_livro">
				<h3>Ano:</h3><h4>2013</h4>
			</div>
			<div class="ficha_livro">
			</div>
			<div class="ficha_livro">
				<h3>ISBN:</h3><h4>1234878234</h4>
			</div>
			<div class="ficha_livro">
				<h3>Páginas:</h3><h4>322</h4>
			</div>
			<div class="ficha_livro">
				<h3>Edição:</h3><h4>1ª edição</h4>
			</div>
		</div>
		<div class="span5 descricao">
			<h1>Olhe mais uma vez - Em cada situação novas oportunidades</h1>
			<h4>Moacir J. Rauber</h4>
			<p>SINOPSE</p>
			<hr />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl. Vestibulum rhoncus libero quis hendrerit euismod. Nulla hendrerit justo nec sem rhoncus sodales. Nam auctor faucibus erat. Phasellus consectetur</p>
		</div>
		<div class="span3">
			<div class="preco_livro">
				<p>R$25,00</p>
				<input type="submit" value="Adicionar ao carrinho" />
			</div>
		</div>
		
	</div>
</div>

<div class="livro_fundo1 livro">
	<div class="container" style="position:relative ;">
		<div class="span3">
			<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/capa_livro.png" alt="" />
			<h2>Ficha técnica</h2>
			<hr />
			<div class="ficha_livro">
				<h3>Editora:</h3><h4>Rocco</h4>
			</div>
			<div class="ficha_livro">
				<h3>Ano:</h3><h4>2013</h4>
			</div>
			<div class="ficha_livro">
			</div>
			<div class="ficha_livro">
				<h3>ISBN:</h3><h4>1234878234</h4>
			</div>
			<div class="ficha_livro">
				<h3>Páginas:</h3><h4>322</h4>
			</div>
			<div class="ficha_livro">
				<h3>Edição:</h3><h4>1ª edição</h4>
			</div>
		</div>
		<div class="span5 descricao">
			<h1>Olhe mais uma vez - Em cada situação novas oportunidades</h1>
			<h4>Moacir J. Rauber</h4>
			<p>SINOPSE</p>
			<hr />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl. Vestibulum rhoncus libero quis hendrerit euismod. Nulla hendrerit justo nec sem rhoncus sodales. Nam auctor faucibus erat. Phasellus consectetur</p>
		</div>
		<div class="span3">
			<div class="preco_livro">
				<p>R$25,00</p>
				<input type="submit" value="Adicionar ao carrinho" />
			</div>
		</div>
		
	</div>
</div>-->