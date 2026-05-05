<?php
namespace App\Modules;

use App\Core\Model;

class Controller_model extends Model {

    public function __construct()
    {
         parent::__construct();
    }

    public function getAllMenu($table_name) {
        return $this->getAll($table_name);
    }

    public function getAllProductForField($table_name, $field, $field_name) {
        return $this->getAllFieldName($table_name, $field , $field_name);
    }
   
}