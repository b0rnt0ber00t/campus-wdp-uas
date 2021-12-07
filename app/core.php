<?php
  // start session
  session_start();
  // default session
  $is_login = !isset($_SESSION['data']['sign_in']) || $_SESSION['data']['sign_in'] == null ? false : true;

  // variable
  $config     = './config/';

  // config
  require_once($config . 'database.php'); // database connection