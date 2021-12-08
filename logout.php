<?php
  require_once('app/core.php');

  // destroying session
  unset($_SESSION['data']);
  session_destroy();

  // redirect
  header('Location: index.php');