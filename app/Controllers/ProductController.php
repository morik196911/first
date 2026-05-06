<?php
namespace App\Controllers;

use App\Core\Controller;

class ProductController extends Controller {

    public function getContent() {
        // Получаем URI и разбиваем на части
        $url = $_SERVER['REQUEST_URI'];
        //echo $url;
        $segments = array_filter(explode('/', $url)); // Убираем пустые элементы
        
        // Извлекаем параметры из URL
        $category_type = $segments[1] ?? null;      // product
        $subcategory_link = $segments[2] ?? null;   // kitchens
        $product_id = $segments[3] ?? null;         // 1

          // Получаем данные о продукте
        $product = $this->model->getAllProductForField("products_".$subcategory_link ,"id",$product_id);

        if ($product) {
            // Передаём данные в шаблон
            $this->template->set('title', $product['title']);
            $this->template->set('text', $product['text']);

            return "/product/index";
        } else {
            return "/errors/404";
        }
    }
}