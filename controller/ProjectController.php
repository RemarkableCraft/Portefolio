<?php

namespace Controller;

/**
 * ProjectController class
 */
class ProjectController extends Controller
{
  public function index()
  {
    echo "liste des projets";
  }

  public function findProject()
  {
    var_dump($this->params);
  }
}
