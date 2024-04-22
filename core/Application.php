<?php

namespace app\core;

/**
 * class Application
 * 
 * @author Hanjae Lee
 * @package app\core
 */
class Application
{
  public Router $router;
  public function __construct()
  {
    $this->router = new Router();
  }

  public function run() {

  }
}