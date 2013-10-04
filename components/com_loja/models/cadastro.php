<?php

defined('_JEXEC') or die('Restricted access');

//jimport('joomla.application.component.modelitem');
jimport('joomla.application.component.modelform');
jimport('joomla.event.dispatcher');
JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_loja'.DS.'tables');


class LojaModelCadastro extends JModelForm {
	
	//protected $msg;
	protected $data;
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_loja.cadastro', 'cadastro', array('control' => 'cadastro', 'load_data' => $loadData));
		if (empty($form)) {
			return false;
		}

		return $form;
	}
	
	public function getData() {
		
		if($this->data === null) {
		
			$this->data = new stdClass;
			$app = JFactory::getApplication();
			$params = JComponentHelper::getParams('com_users');
			//Pega os dados digitados que estao na sessao
			$temp = (array) $app->getUserState('com_loja.cadastro.data', array());
			foreach ($temp as $k => $v)
			{
				$this->data->$k = $v;
			}
			
			// Get the groups the user should be added to after registration.
			$this->data->groups = array();

			// Get the default new user group, Registered if not specified.
			$system = $params->get('new_usertype', 2);

			$this->data->groups[] = $system;
			
			unset($this->data->senha);
			unset($this->data->senha2);	
			
		}	
		
		return $this->data;	
	}
	
	public function registrar($temp) {
	
		$tableCliente = JTable::getInstance('cliente', 'LojaTable');
		
		$temp->cpf	= preg_replace('/[^0-9]+/','',$temp->cpf);
		
		$temp->dataregistro = strftime('%Y-%m-%d %H:%M:%S',time());
		
		$data = (array) $this->getData();
		
		//Realiza o cadastro do usuario no joomla primeiro
		$data['name'] = $temp->nome_completo;
		$data['username'] = $temp->username;
		$data['email'] = $temp->email;
		$data['password'] = $temp->senha;

		//Criar o objeto
		$user = new JUser;
		
		if (!$user->bind($data)) {
			$this->setError($user->getError());
			return false;
		}
		print_r($user);
//		
		if (!$user->save()) {
			$this->setError($user->getError());
			return false;
		}
//		
		$temp->id_joomla = $user->id;
		
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
	
}