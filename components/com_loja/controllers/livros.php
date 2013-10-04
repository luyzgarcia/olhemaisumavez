<?php

defined('_JEXEC') or die('Restricted access');

require_once JPATH_COMPONENT.'/controller.php';

class LojaControllerLivros extends LojaController {
		
	public function adicionarlivro() {
	
		$app = JFactory::getApplication();
		
		$livro = JRequest::getVar('livro', array(), 'post', 'array');		
		
		$app->setUserState('com_popstil.carrinho.valorFrete', '');
		//print_r($livro);
		
		//Apagar o cookie
		//setcookie('carrinho', "", time() - 3600);
		$carrinho = unserialize($_COOKIE['carrinho']);
		//Pega o carrinho do cookie do navegador
		if(isset($carrinho) && !empty($carrinho)) {
			//Existe carrinho no cookie;
			echo 'entrou no carrinho';
			
			print_r(empty($carrinho));
			//Verifica se o carrinho já possui o livro e caso sim, adiciona mais um a quantidade.
			foreach ($carrinho as $key => &$value) {
				if($value['id'] == $livro['id']) {
					
					//Adiciona mais 1 ao carrinho.
					$value['quantidade'] += 1;
					break;	
				}					
			}
			$carrinho = serialize($carrinho);			
			setcookie('carrinho', $carrinho, time() + 60*60*24*7);				
			
		}else {
			echo 'nao entrou no carrinho';
			//Não existe carrinho no cookie;
			//Coloca o livro no item 0 do carrinho
			$c[0]['id'] = $livro['id'];
			$c[0]['quantidade'] = 1;
			$c = serialize($c);
			setcookie('carrinho', $c, time() + 60*60*24*7);
		}
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
	}

}
