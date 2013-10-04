<?php

defined('_JEXEC') or die('Restricted access');

require_once JPATH_COMPONENT.'/controller.php';

class LojaControllerCadastro extends LojaController {
	
	
	public function realizarCadastro() {
		
		// Check for request forgeries.
		JSession::checkToken() or $this->setRedirect(JRoute::_('index.php?option=com_loja&view=cadastro', false));
		
		$app	= JFactory::getApplication();
		$model	= $this->getModel('cadastro', 'LojaModel');
		
		
		//Pega os dados da tela digitados pelo usuario.
		$requestData = $this->input->post->get('cadastro', array(), 'array');
		$dados = new stdClass();
		foreach ($requestData as $k => $v)
		{
			$dados->$k = $v;
		}
		
		//Verifica se as senhas digitadas são iguais
		//JError::raiseError(500, 'Senhas devem ser identicas');
		
		//Coloca o array com as informações digitadas no sessao.
		$app->setUserState('com_loja.cadastro.data', $requestData);
		
		
		if($dados->senha != $dados->senha2) {
			$this->setMessage(JText::_('Senhas devem ser idênticas'));
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=cadastro', false));
			return false;
		}
		
		$retorno = $model->registrar($dados);
		
		if($retorno === false) {
		
			// Save the data in the session.
			$app->setUserState('com_loja.cadastro.data', $requestData);

			// Redirect back to the edit screen.
			$this->setMessage($model->getError(), 'warning');
			$this->setRedirect(JRoute::_('index.php?option=com_loja&view=cadastro', false));
			return false;
		}
		
		//Limpa os dados da sessao
		$app->setUserState('com_loja.cadastro.data', null);
		
		//Redireciona para o painel de controle, com a mensagem
		$this->setMessage('Cadastro realizado com sucesso, você já pode efetuar seu login!');
		$this->setRedirect(JRoute::_('index.php?option=com_loja&view=painelcontrole', false));
		
	}
}