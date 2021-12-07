<?php
  // Define host, username, password, database
  define('DB_HOST', '172.17.0.1');
  define('DB_USER', 'root');
  define('DB_PASS', 'Admin1str4t0r');
  define('DB_NAME', 'big_project_wdp');

  // connect to database
  $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // check connection
  $mysql->connect_error ? die("Connection failed: " . $mysql->connect_error) : null;