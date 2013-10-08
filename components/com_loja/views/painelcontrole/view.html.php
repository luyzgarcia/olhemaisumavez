<?php
//defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class LojaViewPainelControle extends JViewLegacy {
	
	protected $ativo;
	protected $data;
	protected $state;
	
	//Primeiro método a ser chamado ao iniciar o carregamento da pagina.
	function display($tpl = null) {
		
		$user =JFactory::getUser();
		
		$this->user = $user;
		//$this->listalivros		= $this->get('listalivros');
		$this->prepareDocument();	
		
		$this->pedidosAndamento = $this->get('pedidosAndamento');
		
		if($this->getLayout() === 'dadosconta') {
			$this->dadoscliente = $this->get('dadosCliente');
		}
		
		if ($this->getLayout() === 'editar') {
			$this->dadoseditar = $this->get('dadosEditar');
		}

		
		if($this->getLayout() === 'ultimospedido') {
			//$this->pedido = $this->get('pedidopagamento');
		}
		
		parent::display($tpl);
	}
	
	protected function prepareDocument() {
	
		$app	= JFactory::getApplication();
		
		$document = JFactory::getDocument();
		//Importa o arquivo css criado para as modificações do layout
		$document->addStyleSheet(JURI::root() . "/components/com_loja/assets/css/loja.css");
		$document->addScript(JURI::root() . "components/com_loja/views/cadastro/js/jquery.maskedinput.min.js",$defer = false, $async = true);
		$document->addScript(JURI::root() . "components/com_loja/views/cadastro/js/cadastro.js",$defer = false, $async = true);
	}
	
}

?>