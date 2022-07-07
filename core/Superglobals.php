<?php

namespace Core;

/**
 * Superglobals class,
 * permet de sécuriser les données GLOBALS
 */
abstract class Superglobals
{
  /**
   * Variables HTTP GET
   *
   * @var array
   */
  private $_GET;
  /**
   * Variables HTTP POST
   *
   * @var array
   */
  private $_POST;
  /**
   * Variables de session
   *
   * @var array
   */
  private $_SESSION;
  /**
   * Variables de serveur et d'exécution
   *
   * @var array
   */
  private $_SERVER;


  function __construct()
  {
    $this->define_superglobals();
  }


  /**
   * Récupere les valeurs des GLOBALS
   *
   * @return self
   */
  private function define_superglobals()
  {
    $this->_GET = (isset($_GET)) ? $_GET : null;
    $this->_POST = (isset($_POST)) ? $_POST : null;
    $this->_SESSION = (isset($_SESSION)) ? $_SESSION : null;
    $this->_SERVER = (isset($_SERVER)) ? $_SERVER : null;
  }

  /**
   * Get variables HTTP GET
   *
   * @return  array
   */
  public function get_GET()
  {
    return $this->_GET;
  }

  /**
   * Get variables HTTP POST
   *
   * @return  array
   */
  public function get_POST()
  {
    return $this->_POST;
  }

  /**
   * Get variables de session
   *
   * @return  array
   */
  public function get_SESSION()
  {
    return $this->_SESSION;
  }

  /**
   * Set variables de session
   *
   * @param  array  $_SESSION  Variables de session
   *
   * @return  self
   */
  public function set_SESSION(array $session)
  {
    $this->_SESSION = $session;

    return $this;
  }

  /**
   * Vide les vaiables de session
   * 
   * @param  array  $key Variables que l'on souhaite supprimer
   * 
   * @return self
   */
  public function unset_SESSION(array $key)
  {
    if (isset($key) && !empty($key)) {
      foreach ($key as $value) {
        unset($_SESSION[$value]);
      }
    }
  }

  /**
   * Get variables de serveur et d'exécution
   *
   * @return  array
   */
  public function get_SERVER()
  {
    return $this->_SERVER;
  }
}
