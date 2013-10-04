<?php

defined('_JEXEC') or die('Restricted access');

//Como a constante DS foi removida na versao 3, 
//é necessario definir ela para nao dar problema no resto do componente.
if(!defined('DS')) {
	define('DS',DIRECTORY_SEPARATOR);
}

//require_once ( 'components/com_popstilcustomizacao/views/popstilcustomizacao/teste.php' );

jimport('joomla.application.component.controller');
$controller = JControllerLegacy::getInstance('loja');
$controller->execute(JRequest::getCmd('task', 'display'));
$controller->redirect();
/*$controller = JController::getInstance('popstilcustomizacao');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
*/



//adicionar javascript e css
$document = JFactory::getDocument();
//$document->addStyleSheet('components/com_popstilcustomizacao/assets/css/estilos-carrinho.css');
//$document->addStyleSheet('components/com_popstilcustomizacao/assets/css/estilos-customizacao.css');

//$document->addScript('components/com_popstilcustomizacao/assets/js/jquery-ui1.10.2.js');
//$document->addScript('components/com_popstilcustomizacao/assets/js/droparea.js');
//$document->addScript('components/com_popstilcustomizacao/assets/js/bootstrap.min.js');
//$document->addScript('components/com_popstilcustomizacao/assets/js/customizacao.js');
//$document->addScript('components/com_popstilcustomizacao/assets/js/jquery.maskedinput.min.js');
//$document->addScript('components/com_popstilcustomizacao/assets/js/cadastrousuario.js');
$controller->redirect();

?>