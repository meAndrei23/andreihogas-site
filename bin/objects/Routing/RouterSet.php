<?php

namespace Routing;

use Routing\Route;

class RouterSet {
  public $routeList = array();

  public function add(Route $route) {
    $this ->routeList[] = $route;
  }

  public function addArray($routeArray) {
    foreach ($routeArray as $route) {
      $this -> add(new Route($route['name'], $route['pattern'], $route['options']));
    }
  }

  public function match($string) {
    foreach ($this -> routeList as $route) {
      if ($r = $route -> match($string)) {
        return $r;
      }
    }

    return false;
  }
}
