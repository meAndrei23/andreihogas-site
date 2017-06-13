<?php
$routeList = [
  [
    'name' => 'home', 'pattern' => '/',
    'options' => [
      '_controller' => 'FrontOffice', '_action' => 'home'
    ]
  ]
];

return $routeList;
