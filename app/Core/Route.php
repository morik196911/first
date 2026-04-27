<?php
namespace App\Core;

class Route {

  public function run() {
    $url = $_SERVER['REQUEST_URI'];
    $routes = require __DIR__ .'/../routes.php';
    $flag = false;
    foreach($routes as $pattern => $controllerAndAction ):
       preg_match($pattern, $url, $matches);
       //print_r($matches);
      if(!empty($matches)) {
        $flag = true;
        break;
      }
        endforeach;
        if(!$flag) {
            http_response_code(404);
            echo 'Page not found';
            return;
        }
        unset($matches[0]);

        $controllerName = $controllerAndAction[0];
        $actionName = $controllerAndAction[1];

       /* if(!class_exists($controllerName)) {
            http_response_code(500);
            echo 'Controller not found';
            return;
        }*/

$controller = new $controllerName();

      // Проверка существования метода
       /* if (!method_exists($controller, $actionName)) {
            http_response_code(500);
            echo 'Method not found';
            return;
        }*/
  $controller->$actionName(...$matches);

  }

}