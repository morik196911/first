<?php

namespace App\Controllers;

use App\Core\Config;
use App\Core\Controller;

class CategoryController extends Controller
{

  public function getContent()
{
    $url = $_SERVER['REQUEST_URI'];
    $data = explode("/", $url);
     //$data[1]; soft
     //$data[2] имя дивана
     
    try {
        $_SESSION['global_category_english'] = $data[1];
        // Выборка категории
        $category_products = $this->model->getAllMenu("category_" . $data[1]);
        
        // Имя категории
        $category_global = $this->model->getAllProductForField("category_global", "link", $data[1]);
        $_SESSION['global_category'] = $category_global['title'];
        //Имя подкатегории для ProductController
       $categoty_sub = $this->model->getAllProductForField("category_".$data[1], "link", $data[2]);
        $_SESSION['category_sub'] = $categoty_sub['title'];
        // Переводим в одну колонку для поиска
        $category_column = array_column($category_products, "link");

        // Проверка наличия продукта в базе данной категории
        if (in_array($data[2], $category_column, true) ) {

            $products = $this->model->getAllMenu("products_" . $data[2]);
            if (empty($products)) {
                return "/errors/404";
            }

            $category_type = $data[1]; // тип категории corpus, hrom
            $subcategory_link = $data[2]; // подкатегория

            $this->template->set('category_title', $category_global["title"]);
            $this->template->set("products", $products);
            $this->template->set("category_type", $category_type);
            $this->template->set("subcategory_link", $subcategory_link);
            return "/category/index";
        } else {
            return "/errors/404";
        }
    } catch (\mysqli_sql_exception $e) {
        // Логируем ошибку для отладки (опционально)
        error_log("Database error: " . $e->getMessage());

        // Перенаправляем на страницу ошибки
        return "/errors/db";
    }
}

}
