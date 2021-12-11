<?php
  require_once('app/core.php');

  // check is loged in
  $is_login ? die(header("Location: " . base_url() . "/dashboard")) : null;

  function login()
  {
    global $mysql;

    $username = $mysql->real_escape_string(request_post()->username);
    $password = $mysql->real_escape_string(request_post()->password);
    $password = md5($password);
    $sql      = "SELECT * FROM users WHERE username='{$username}' and password='{$password}'";
    $result   = $mysql->query($sql);

    echo $result->num_rows != 1
    ? '<div class="alert alert-danger mt-3 mx-2" role="alert">Username or Password does not match!</div>'
    : _login((object) $result->fetch_assoc());
  }

  function _login(object $result)
  {
    $_SESSION['data'] = [
      'user_id' => $result->id,
      'sign_in' => true,
    ];
    header('Location: dashboard');
  }

  function register()
  {
    echo request_post()->password != request_post()->repeat_password
    ? '<div class="alert alert-danger mt-3 mx-2" role="alert">Password does not match!</div>'
    : _register();
  }

  function _register()
  {
    global $mysql;

    $username = $mysql->real_escape_string(request_post()->username);
    $password = $mysql->real_escape_string(request_post()->password);
    $password = md5($password);

    $sql = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')";
    $mysql->query($sql);

    echo $mysql->affected_rows
    ? '<div class="alert alert-success mt-3 mx-2" role="alert">Registert Success!</div>'
    : '<div class="alert alert-danger mt-3 mx-2" role="alert">Registert Failed!</div>';
  }
