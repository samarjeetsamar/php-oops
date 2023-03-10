<?php

function autoloader($className) {
  $path = str_replace('\\', '/', $className) . '.php';
  if (file_exists($path)) {
    require_once $path;
  }
}

spl_autoload_register('autoloader');