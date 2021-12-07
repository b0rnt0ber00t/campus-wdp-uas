<?php
  require_once('app/core.php');
  $is_login ? die(header('Location: dashboard')) : null;