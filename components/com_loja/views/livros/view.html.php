<?php
//defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class LojaViewLivros extends JViewLegacy {
	
	protected $ativo;
	protected $data;
	protected $state;
	
	//Primeiro método a ser chamado ao iniciar o carregamento da pagina.
	function display($tpl = null) {
		
		$this->listalivros		= $this->get('listalivros');
		$this->prepareDocument();	
		
		parent::display($tpl);
	}
	
	protected function prepareDocument() {
	
		$app	= JFactory::getApplication();
		
		$document = JFactory::getDocument();
		//Importa o arquivo css criado para as modificações do layout
		$document->addStyleSheet(JURI::root() . "/components/com_loja/assets/css/loja.css");
	}
	
}

?>