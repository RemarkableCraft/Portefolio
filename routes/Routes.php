<?php

namespace Router;

use Core\Superglobals;
use Controller\HomeController;
use Controller\ErrorController;
use Controller\ProjectController;

/**
 * Routes class
 */
class Routes extends Superglobals
{
  public function routeur()
  {
    // effacer le dernier '/', sauf si il est tous seul, et recharger la page
    $server = $this->get_SERVER();
    $url = $server['REQUEST_URI'];

    if (isset($url) && $url != '/' && $url[-1] === '/') {
      $url = substr($url, 0, -1);

      http_response_code(301);
      header('Location: ' . $url);
    }

    // appeler le bon controlleur
    $get = $this->get_GET();
    $path = explode("/", $get['path']);

    $controller = array_shift($path);
    $params = $path;

    if (isset($controller) && empty($controller)) {
      $route = new HomeController;
      $route->index();
    } else {
      switch ($controller) {
        case 'home':
          if (isset($params) && empty($params)) {
            $route = new HomeController;
            $route->index();
          } else {
            $route = new HomeController;
            $route->findHome($params);
          }
          break;

        case 'accueil':
          if (isset($params) && empty($params)) {
            $route = new HomeController;
            $route->index();
          } else {
            $route = new HomeController;
            $route->findHome($params);
          }
          break;

        case 'projet':
          if (isset($params) && empty($params)) {
            $route = new ProjectController;
            $route->index();
          } else {
            $route = new ProjectController;
            $route->findProject($params);
          }
          break;

        default:
          $route = new ErrorController;
          $route->index();
          break;
      }
    }
  }
}
