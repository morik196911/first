<?php
namespace App\Core;

use App\Core\Template;
use App\Core\Config;
use App\Core\Format;
use App\Core\Validate;
use App\Modules\Controller_model;

abstract class Controller {
   protected $template ;
   protected $format;
   protected $data ;
   protected $validate;
   protected $title;
   protected $model;

   public function __construct()
   {
       if (session_status() === PHP_SESSION_NONE) {
           session_start();
         }
    $this->template = new Template(__DIR__ . '/../../views/');
    $this->format = new Format();
    $this->data = $this->format->xss($_REQUEST);
    $this->validate = new Validate();
    $this->model = new Controller_model();

    $this->template->set('title', $this->title);
    $this->template->set('content', $this->getContent());
    $this->template->set('topmenu', $this->model->getAllMenu('topmenu'));
    
    $this->template->display('main');
   }

  abstract protected function getContent();
}

