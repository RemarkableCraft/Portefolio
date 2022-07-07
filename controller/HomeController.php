<?php

namespace Controller;

/**
 * HomeController class
 */
class HomeController extends Controller
{
  public function index()
  {
    echo "homepage";
  }

  public function findHome(array $params)
  {
    var_dump($params);
  }
}
