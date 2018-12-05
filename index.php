<?php

session_start();

$controller = $_GET['controller'] ?? null;

// Load the right controller
if (!empty($controller)) {
  if (is_file('controllers/'.$controller.'.php'))
    require 'controllers/'.$controller.'.php';
  else {
    $error = 'Unknown controller.';
    $httpCode = 404;
    require 'controllers/error.php';
  }
}
else {
  $error = 'You must specify a controller by using `?controller=requestedController`.';
  $httpCode = 409;
  require 'controllers/error.php';
}

?>
