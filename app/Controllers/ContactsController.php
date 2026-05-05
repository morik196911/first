<?php
namespace App\Controllers;
use App\Core\Controller;


class ContactsController extends Controller {

  public $title = "Наши контакты";

  public function getContent() {
 
    return '/contacts/index';
  }  

}