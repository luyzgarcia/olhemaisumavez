<?php 

defined('_JEXEC') or die;

jimport('joomla.database.table');

class LojaTableItensPedido extends JTable {
	  
	function __construct($db) {
		parent::__construct('#__loja_itens_pedido','id',$db);
	}
	
} 