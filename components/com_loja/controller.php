<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class LojaController extends JControllerLegacy {

	function display($cachable = false, $urlparams = false) {

		$vName	 = JRequest::getCmd('view');
		
		if($vName == 'painelcontrole') {
			$user = JFactory::getUser();
			if( $user->get('guest') == 1) {
				//Caso o usuario não esteja logado redireciona para a tela de login
				$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
				return;
			}
		}else if($vName =='cadastro') {
			$user = JFactory::getUser();
			if( $user->get('guest') != 1) {
				//Caso o usuario esteja logado redireciona para o painel de controle dele
				$this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole', false));
				return;
			}
		}
		
		parent::display();
	}

}

?>