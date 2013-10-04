<?php
//defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class LojaViewCarrinho extends JViewLegacy {
	
	protected $ativo;
	protected $data;
	protected $state;
	
	//Primeiro método a ser chamado ao iniciar o carregamento da pagina.
	function display($tpl = null) {
		
		$app = JFactory::getApplication();
		
		$this->carrinho		= $this->get('carrinho');

		$this->valorFrete		= $this->get('valorFrete');
		$this->cep1				= $app->getUserState('com_popstil.carrinho.cep1');
		$this->cep2				= $app->getUserState('com_popstil.carrinho.cep2');
		
		$this->totalPedido		= $this->get('totalPedido');
		
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		if($this->getLayout() === 'enderecoentrega') {
			$this->dadoscliente = $this->get('dadosCliente');
		}
		
		if($this->getLayout() === 'confirmarpedido') {
			$this->dadoscliente = $this->get('dadosCliente');
			$this->dadospedido  = $this->get('dadosPedidoAndamento');
		}
		
		if($this->getLayout() === 'pedidorealizado') {
			$this->dadospedidorealizado = (array)JFactory::getApplication()->getUserState('com_popstil.carrinho.dadospedidofinalizado', array());
			//print_r($this->dadospedidorealizado);
			
			//JFactory::getApplication()->setUserState('com_popstil.carrinho.dadospedidofinalizado', '');
			
		}
		
		$this->prepareDocument();	
		
		parent::display($tpl);
	}
	
	protected function prepareDocument() {
	
		$app	= JFactory::getApplication();
		
		$document = JFactory::getDocument();
		//Importa o arquivo css criado para as modificações do layout
		$document->addStyleSheet(JURI::root() . "/components/com_loja/assets/css/loja.css");
		$document->addScript(JURI::root() . "components/com_loja/assets/js/jquery.min.1.7.1.js");
		$document->addScript(JURI::root() . "components/com_loja/assets/js/jquery.autotab-1.1b.js",$defer = false, $async = true);
		$document->addScript(JURI::root() . "components/com_loja/views/carrinho/js/script_carrinho.js",$defer = false, $async = true);
		$document->addScript(JURI::root() . "components/com_loja/views/cadastro/js/jquery.maskedinput.min.js",$defer = false, $async = true);
		$document->addScript(JURI::root() . "components/com_loja/views/cadastro/js/cadastro.js",$defer = false, $async = true);
	}
}

?>