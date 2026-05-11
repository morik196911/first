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
            $this->template->set('global_category', $_SESSION['global_category'] ?? "");
            $this->template->set('category_sub', $_SESSION['category_sub'] ?? "");
            $this->template->set('global_category_link', $_SESSION['global_category_english']);
            $this->template->set('subcategory_link', $subcategory_link);
            /* массив фото*/
            $images_array = explode(',', $product['images']);
            $this->template->set('images', $images_array);
            $this->template->set('price', $product['price']);

            return "/product/index";
        } else {
            return "/errors/404";
        }
    }
}