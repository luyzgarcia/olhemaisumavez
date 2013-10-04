<?php 

defined('_JEXEC') or die;

jimport('joomla.database.table');

class LojaTablePedido extends JTable {
	  
	function __construct($db) {
		parent::__construct('#__loja_pedidos','id',$db);
	}
	
} 