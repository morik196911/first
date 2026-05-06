<?php
namespace App\Core;

use App\Core\Config;
use App\Core\DataBase;

abstract class Model {

  protected $db;

  public function __construct( )
  {
    $this->db = DataBase::getDB();
  }

 	/*выбрать всё*/
	protected function getAll($table_name, $v = true) {
		$query = "SELECT * FROM ".$table_name." WHERE `visible` = '$v' ";
		return $this->db->select($query);
	}

		/*выбрать всё по значению поля*/
	protected function getAllFieldName($table_name, $field, $field_value, $v = true) {
		$query = "SELECT * FROM ".$table_name." 
		 WHERE `visible` = '$v' AND `$field`= '$field_value' ";
		return $this->db->selectRow($query);
	}
   /* Выбрать по своему названию таблицы*/
	/*protected function getAllTableName($table_name, $v = true) {
	 	$query = "SELECT * FROM ".$table_name." WHERE `visible` = '$v' ";
		return $this->db->select($query);
	}*/


}//class