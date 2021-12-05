<?php
  // config database
  require_once('./config/database.php');

  // connect to database
  $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // check connection
  $mysql->connect_error ? die("Connection failed: " . $mysql->connect_error) : null;