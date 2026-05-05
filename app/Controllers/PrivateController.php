<?php
namespace App\Controllers;
use App\Core\Controller;


class PrivateController extends Controller {

  public $title = "Политика приватности";

  public function getContent() {
 
    return '/private/index';
  }  

}