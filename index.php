<?php
  require_once('app/core.php');

  !$is_login ? header('Location: login.php') : header('Location: dashboard');