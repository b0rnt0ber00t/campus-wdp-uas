<?php
  // start session
  session_start();
  // default session
  $_SESSION['data']['sign_in'] = $_SESSION['data']['sign_in'] == null ? false : true;

  // variable
  $config     = './config/';
  $controller = './controller/';
  $middleware = './middleware/';

  // config
  require_once($config . 'config.php'); // config file

  // controller
  require_once($controller . 'request.php'   ); // get all request
  require_once($controller . 'route.php'     ); // route controller
  require_once($controller . 'connection.php'); // database connection

  // middleware
  require_once($middleware . 'auth.php');    // check logedin