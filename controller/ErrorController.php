<?php

namespace Controller;

/**
 * ErrorController class
 */
class ErrorController extends Controller
{
  public function index()
  {
    echo "Erreur";
    http_response_code(404);
  }
}
