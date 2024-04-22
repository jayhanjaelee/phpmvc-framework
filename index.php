<?php

/**
 * User: Hanjae Lee
 * Date: 2024-04-22 
 */

 require_once __DIR__.'/vendor/autoload.php';

 use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
  return 'Hello, World';
})

$app->router->get('/contact', function() {
  return 'Contact';
})

// $app->run();
?>