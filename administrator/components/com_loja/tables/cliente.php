<?php 

defined('_JEXEC') or die;

jimport('joomla.database.table');

class LojaTableCliente extends JTable {
	  
	function __construct($db) {
		parent::__construct('#__loja_clientes','id',$db);
	}
	
} 