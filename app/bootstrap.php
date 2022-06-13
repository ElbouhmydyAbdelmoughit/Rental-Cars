<?php
// Load Config
require_once 'config/config.php';
// Load helpers
require_once 'helpers/url_hepler.php';
// Autoload Core Libraries
spl_autoload_register(function ($className) {
  require_once 'libraries/' . $className . '.php';
});