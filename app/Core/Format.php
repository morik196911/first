<?php
namespace App\Core;

class Format{
	
	public function xss($data){
		if(is_array($data)){
			$good = [];
			foreach($data as $k=>$v){
				$good[$k] = $this->xss($v);
			}return $good;
		}return htmlspecialchars($data);
	}
	
}//















