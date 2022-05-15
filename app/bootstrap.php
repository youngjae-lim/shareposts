<?php

  // load Config
  require_once 'config/config.php';
  // load Helpers
  require_once 'helpers/url_helper.php';

  // Autoload Core Libraries
spl_autoload_register(
    function ($className) {
        include_once 'libraries/' . $className . '.php';
    }
);
