<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\MenuModel;
use App\Modules\Main_model;

class MainController extends Controller {

  public $model;
  public $title = "Главная страница";

  public function getContent() {
 
    $this->model = new Main_model();
    $product = $this->model->getAllImages('main_images');

    $this->template->set('images', $product);
    return '/main/index';
  }  

}