<?php

defined('_JEXEC') or die('Restricted access');

//jimport('joomla.application.component.modelitem');
jimport('joomla.application.component.modelform');
jimport('joomla.event.dispatcher');

JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_popstil'.DS.'tables');

class LojaModelPainelControle extends JModelForm {
	
	protected $data;
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_loja.painelcontrole', 'painelcontrole', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form)) {
			return false;
		}

		return $form;
	}
	
	public function getDadosCliente() {
	
		$user = JFactory::getUser();
			
		$db = JFactory::getDBO();
	
		$query = $db->getQuery(true);
		$query->select('cliente.*');
		$query->from('#__loja_clientes cliente ');
		$query->where('cliente.id_joomla = '.$user->id);
		$db->setQuery((String) $query);
		$cliente = $db->loadObject();
		
		return $cliente;
		
	}
	
	public function getDadosEditar() {
		
		$app	= JFactory::getApplication();
		
		$temp = (array) $app->getUserState('com_loja.painelcontrole.editar', array());

		if($temp === null || empty($temp)) {
			$retorno = $this->getDadosCliente();		
		}else {
			foreach ($temp as $k => $v) {
				$retorno->$k = $v;
			}
		}
		return $retorno;
		
	}
	
	public function editar($temp) {
		
		$tableCliente = JTable::getInstance('cliente', 'LojaTable');
				
		$temp->cpf	= preg_replace('/[^0-9]+/','',$temp->cpf);
		
		$temp->dataregistro = strftime('%Y-%m-%d %H:%M:%S',time());
		
		$user = JFactory::getUser();
		
		//Realiza o cadastro do usuario no joomla primeiro
		$data['name']		 	= $temp->nome_completo;
		$data['username']		= $temp->username;
		$data['email'] 			= $temp->email;
		$data['password'] 		= $temp->senha;
		$data['id'] 			= $user->id;
		

		//Criar o objeto
		$user = new JUser;
		
		if (!$user->bind($data)) {
			$this->setError($user->getError());
			//return false;
		}
//		
		if (!$user->save()) {
			$this->setError($user->getError());
			//return false;
		}
//		
//		$temp->id = $temp->id;
//		
		//Salva o cliente na loa
		if (!$tableCliente->bind($temp)) {
			$this->setError($tableUsuario->getError());
			return false;
		}
		
		if (!$tableCliente->store()) {
			$this->setError($tableUsuario->getError());
			return false;
		}
		
		echo true;		
		
	}
	
	public function getPedidosAndamento() {
				
		$user = JFactory::getUser();
		
		if( $user->get('guest') == 1) {
			//Caso o usuario não esteja logado redireciona para a tela de login
			$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
			return;
		}else {
			
			/*
			$db = JFactory::getDBO();
			
				$query = $db->getQuery(true);
				$query->select('cliente.*');
				$query->from('#__loja_clientes cliente ');
				$query->where('cliente.id_joomla = '.$user->id);
				$db->setQuery((String) $query);
				$cliente = $db->loadObject();
				
				return $cliente;*/
			$db = JFactory::getDBO();
			
			$query = $db->getQuery(true);
			$query->select('pedido.*');
			$query->from('#__loja_pedidos pedido');
			$query->JOIN('INNER', '#__loja_clientes cliente on cliente.id = pedido.id_cliente');
			$query->where('cliente.id_joomla ='.$user->id);
			$query->where('pedido.status = \'AGP\'');
			$db->setQuery((String) $query);
			$pedidos = $db->loadObjectList();
			
			return $pedidos;
			
		}
		
	}

}