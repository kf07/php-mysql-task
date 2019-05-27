<?php
class Session
{
  protected $bag;

  public
  function __construct($namespace = 'app')
  {
    if (!session_id()) {
      session_start();
    }

    $this->bag = &$_SESSION[$namespace];

    if (!isset($this->bag)) {
      $this->bag[$this->getAppDataKey()] = [];
      if (!$this->getCsrfToken()) {
        $this->bag[$this->getCsrfTokenKey()] = $this->generateCsrfToken();
      }
    }
  }

}
