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
        break;
      }
    endforeach;
    
    unset($matches[0]);

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName();

    $controller->$actionName(...$matches);
  }
}
