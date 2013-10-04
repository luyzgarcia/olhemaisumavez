<?php

defined('_JEXEC') or die('Restricted access');

require_once JPATH_COMPONENT.'/controller.php';

class LojaControllerCarrinho extends LojaController {
	
	public function finalizarPedido() {
		
		JSession::checkToken() or $this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
		
		$user = JFactory::getUser();
		$app = JFactory::getApplication();
		//Caso o usuario não esteja logado ele redireciona para a tela de login
		if(!$user->id) {
			$app->setUserState('com_loja.pedidoandamento', '1');
			$this->setMessage('É necessario estar logado para realizar a compra!');
			$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
		}else {
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho&layout=enderecoentrega', false));
		}
		
	}
	
	public function aumentarQuantidade() {
	
		$model = $this->getModel('carrinho');
		
		$idLivro = JRequest::getVar('id');
		
		$model->aumentarQuantidade($idLivro);
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
	}
	
	public function diminuirQuantidade() {
	
		$model = $this->getModel('carrinho');
		
		$idLivro = JRequest::getVar('id');
		
		$model->diminuirQuantidade($idLivro);
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
	}
	
	public function removerItem() {
	
		$model = $this->getModel('carrinho');
		
		$idLivro = JRequest::getVar('id');
		
		$model->removerItem($idLivro);
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
	}
	
	public function calcularFrete($cep = null) {
		
		$app = JFactory::getApplication();
		
		$model = $this->getModel('carrinho');
		
		if($cep === null){
			$cep 	= JRequest::getVar('cep').JRequest::getVar('cep2');
		}
		$app->setUserState('com_popstil.carrinho.valorFrete', '0.00');
				
		$valorFrete = $model->calculaFreteCorreios('41106','88090100',$cep);
		
		if(!$valorFrete) {
			$this->setMessage(JText::sprintf('COM_FRETE_CEP_INVALID'), 'warning');
			
			//$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
		}else {
		
			$valorFrete = str_ireplace(',','.',$valorFrete);
			
			//converte o valor retornado para float.
			$valorFrete = floatval($valorFrete);
			
			$app->setUserState('com_popstil.carrinho.valorFrete', $valorFrete);
			
			$app->setUserState('com_popstil.carrinho.cep1', JRequest::getVar('cep'));
			$app->setUserState('com_popstil.carrinho.cep2', JRequest::getVar('cep2'));
		}
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));
		
	}
	
		
	public function finalizarEnderecoPadrao() {
		
		JSession::checkToken() or $this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho', false));

		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho&layout=confirmarpedido', false));
	}
	
	public function confirmarPedido() {
		//echo 'confirma pedido';
		
		$app	= JFactory::getApplication();
		$model	= $this->getModel('carrinho', 'LojaModel');
		
		$requestData = $this->input->post->get('pedido', array(), 'array');
		
		$retorno = $model->finalizarPedido($requestData);
		
		if($return === false){
			
			$this->setMessage('Erro ao finalizar pedido, tente novamente mais tarde.', 'warning');
			//$app->setUserState('com_popstil.registration.erro', null);
			
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho&layout=confirmapedido', false));
			return false;
			
		}
		
		setcookie('carrinho', "", time() - 3600);
		
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=carrinho&layout=pedidorealizado', false));
	}

}
