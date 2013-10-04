<?php

defined('_JEXEC') or die('Restricted access');

//jimport('joomla.application.component.modelitem');
jimport('joomla.application.component.modelform');
jimport('joomla.event.dispatcher');

class LojaModelLivros extends JModelForm {
	
	//protected $msg;
	protected $data;
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_livros.livro', 'livro', array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form)) {
			return false;
		}

		return $form;
	}
//	
//	public function getCategoriasTamanhos() {
//		
//		$db = JFactory::getDBO();
//		
//		$query = $db->getQuery(true);
//		
//		$query->select('*');
//		$query->from('#__customizacao_categoria_tamanhos');
		//$query->where(' id_cat_tamanho = 1');
//		$db->setQuery((String) $query);
//		$messages = $db->loadObjectList();
//
//		/*if($messages) {
//			foreach($messages as $message) {
//				$this->msg .= $message->dataAlteracao .',';
//			}
//		}*/
//		
//		return $messages;
//	}
//	
	public function getListalivros() {
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		
		$query->select('livro.*, edi.nome as editora');
		$query->from('#__loja_livros livro');
		$query->JOIN('INNER', '#__loja_editoras as edi on edi.id = livro.id_editora');
		$db->setQuery((String) $query);
		$livros = $db->loadObjectList();
		
		return $livros;
	}

}

?>