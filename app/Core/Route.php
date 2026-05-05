<?php
namespace App\Core;

class Route
{

  public function run()
  {
    $url = $_SERVER['REQUEST_URI'];
    $routes = require __DIR__ . '/../routes.php';
    $flag = false;
    foreach ($routes as $pattern => $controllerAndAction):
      preg_match($pattern, $url, $matches);
      if (!empty($matches)) {
        $flag = true;
        //print_r($matches);
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

    $controller = new $controllerName();

    $controller->$actionName(...$matches);
  }
}
