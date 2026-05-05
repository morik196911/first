<?php
namespace App\Controllers;
use App\Core\Controller;


class EmailController extends Controller {

  public $title = "Отправка email";

  public function getContent() {
 
    return '/email/index';
  }  

}