<?php
//defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class LojaViewCadastro extends JViewLegacy {
	
	protected $data;
	
	//Primeiro método a ser chamado ao iniciar o carregamento da pagina.
	function display($tpl = null) {
	
		//Pega os dados da sessao
		$this->data		= $this->get('Data');
		
		//$this->listalivros		= $this->get('listalivros');
		$this->prepareDocument();	
		
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