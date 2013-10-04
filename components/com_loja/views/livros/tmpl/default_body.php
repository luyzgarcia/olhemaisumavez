<?php

defined('_JEXEC') or die('Acesso restrito');

?>

<?php foreach ($this->listalivros as $key => $value) { ?>
	<div class="livro_fundo<?php echo $key % 2 ?> livro">
		<div class="container" style="position:relative ;">
			<div class="span3">
				
				<img src="<?php echo JURI::root() ?>/components/com_loja/assets/img/capa_livro.png" alt="" />
				<h2>Ficha técnica</h2>
				<hr />
				<div class="ficha_livro">
					<h3>Editora:</h3><h4><?php echo $value->editora; ?></h4>
				</div>
				<div class="ficha_livro">
					<h3>Ano:</h3><h4><?php echo $value->ano; ?></h4>
				</div>
				<div class="ficha_livro">
				</div>
				<div class="ficha_livro">
					<h3>ISBN:</h3><h4><?php echo $value->isbn; ?></h4>
				</div>
				<div class="ficha_livro">
					<h3>Páginas:</h3><h4><?php echo $value->paginas; ?></h4>
				</div>
				<div class="ficha_livro">
					<h3>Edição:</h3><h4><?php echo $value->edicao; ?></h4>
				</div>
				
			</div>
			<div class="span5 descricao">
				<h1><?php echo $value->titulo; ?></h1>
				<h4>Moacir J. Rauber</h4>
				<p>SINOPSE</p>
				<hr />
				<p><?php echo $value->sinopse; ?></p>
			</div>
			<div class="span3">
				<div class="preco_livro">
					<p>R$ <?php echo money_format('%i', $value->valor); ?></p>
					<form method="post" action="<?php echo JRoute::_('index.php?option=com_loja&task=livros.adicionarlivro'); ?>">
						<input type="hidden" value="<?php echo $value->id; ?>" name="livro[id]" />
						<input type="submit" value="Adicionar ao carrinho" class="bt_padrao" />
					</form>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

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