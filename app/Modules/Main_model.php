<?php
namespace App\Modules;
use App\Core\Model;

class Main_model extends Model {

    public function __construct() {
         parent::__construct();
    }

    public function getAllImages($table_name) {
       return $this->getAll($table_name);
    }
}