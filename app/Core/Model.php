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

		/*выбрать всё по id*/
	/*protected function getAllId($id, $v = true) {
		$query = "SELECT * FROM ".$this->table_name." 
		 WHERE `visible` = '$v' AND `id`= '$id' ";
		return $this->db->select($query);
	}*/
   /* Выбрать по своему названию таблицы*/
	/*protected function getAllTableName($table_name, $v = true) {
	 	$query = "SELECT * FROM ".$table_name." WHERE `visible` = '$v' ";
		return $this->db->select($query);
	}*/


}//class