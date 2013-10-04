<?php

defined('_JEXEC') or die('Restricted access');

require_once JPATH_COMPONENT.'/controller.php';

class LojaControllerPainelControle extends LojaController {
	
	
		
	public function editar() {
		
		JSession::checkToken() or $this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=editar', false));
		
		$user = JFactory::getUser();
		
		$app	= JFactory::getApplication();
		$model	= $this->getModel('painelcontrole', 'LojaModel');
		
		//Pega os dados da tela digitados pelo usuario.
		$requestData = $this->input->post->get('cadastro', array(), 'array');
		$idcliente	 = $requestData['id'];
		$dados = new stdClass();
		foreach ($requestData as $k => $v)
		{
			$dados->$k = $v;
		}
		
		$dados->id_cliente = $idcliente;
		//Verifica se as senhas digitadas são iguais
		//JError::raiseError(500, 'Senhas devem ser identicas');
		
		//Coloca o array com as informações digitadas no sessao.
		$app->setUserState('com_loja.painelcontrole.editar', $requestData);
		
		if($dados->senha != $dados->senha2) {
			$this->setMessage(JText::_('Senhas devem ser idênticas'));
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=editar', false));
			return false;
		}
		
		//$retorno = 
		$model->editar($dados);
				
		if($retorno === false) {

			// Redirect back to the edit screen.
			$this->setMessage($model->getError(), 'warning');
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=editar', false));
			return false;
		}
		
		//Limpa os dados da sessao
		$app->setUserState('com_loja.painelcontrole.editar', null);
		
		//Redireciona para o painel de controle, com a mensagem
		$this->setMessage('Edição realizada com sucesso!');
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole&layout=dadosconta', false));
		
		
	
	}
		
}