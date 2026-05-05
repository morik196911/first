<?php

namespace App\Controllers;

use App\Core\Controller;

class CategoryController extends Controller
{

    public function getContent()
    {
        $url = $_SERVER['REQUEST_URI'];
        $data = explode("/", $url);
        /* Выборка категории */
        $category_products = $this->model->getAllMenu("category_" . $data[1]);
        /* имя категории*/
        $category_title =$this->model->getAllProductForField("category_global", "link", $data[1]);
        /* переводим в одну колонку для поиска*/
        $category_column = array_column($category_products, "link");
        /* Проверка наличия продукта в базе данной категории*/
        if (in_array($data[2], $category_column, true)) {
         $products = $this->model->getAllMenu("products_".$data[2]);
        
         $this->template->set('category_title', $category_title["title"]);
         $this->template->set("products", $products);
         $this->template->set("category_link", $data[2]);
            return "/category/index";
        } else {
            return "/errors/404";
        }
    }
}
