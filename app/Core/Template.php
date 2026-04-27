<?php
namespace App\Core;

class Template {
	
	private $dir_tmpl;
	private $data = [];
	
	public function __construct($dir_tmpl) {
		$this->dir_tmpl = $dir_tmpl;
	}
	
	public function set($name, $value) {
		$this->data[$name] = $value;
	}
	
	public function delete($name) {
		unset($this->data[$name]);
	}
	
	public function __get($name) {
		//if (isset($this->data[$name])) return $this->data[$name];
		//return "";
		return $this->data[$name] ?? '';
	}
	
	public function display($template) {
		$templatePath = $this->dir_tmpl.$template.".php";
		  // Проверка существования файла шаблона
        if (!file_exists($templatePath)) {
            throw new \Exception("Template file not found: $templatePath");
        }
		ob_start();
		include ($templatePath);
		echo ob_get_clean();
	}
	
}
?>