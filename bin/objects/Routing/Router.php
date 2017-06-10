<?php

namespace Routing;

class Router {
  public $routerSet;

  function __construct($routesPathFile = 'app/config/router') {
    $this -> routerSet = new RouterSet();
    $arrayRoutes = include $routesPathFile . '.php';
    $this -> routerSet -> addArray($arrayRoutes);
  }

  public function run($url) {
    $data = $this -> routerSet -> match($url);
    if(isset($data['_controller'], $data['_action'])) {
      $controller = $data['_controller'].'Controller';
      $action = $data['_action'].'Action';
      $ctr = new $controller;
      $ctr -> $action($data['matches']);
      return true;
    }
    else {
      return false;
    }
  }
}
